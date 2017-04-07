<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 4.4.2017
 * Time: 13:50
 */

namespace Mini\Model;

use Mini\Core\Model;


class Upload extends Model{
    protected $destination;

    protected $max = 13371337;
    protected $messages = [];
    protected $renameduplicates;
    protected $conn;
    protected $permitted = [
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png'
    ];
    protected $notTrusted = ['bin', 'cgi', 'exe', 'js', 'pl', 'php', 'py', 'sh'];
    protected $suffix = '.upload';
    protected $newName;

    protected function checkFile($file) {
        $accept = true;
        if($file['error'] != 0) {
            $this->getErrorMessage($file);
            // hætta að leita ef að engin skrá er sett inn
            if ($file['error'] == 4) {
                return false;
            } else {
                $accept = false;
            }
        }
        if (!$this->checkSize($file)) {
            $accept = false;
        }
        if ($this->typeCheckingOn){

            if (!$this->checkType($file)) {
                $accept = false;
            }
        }
        if ($accept) {
            $this->checkName($file);
        }

        return $accept;

    }
    public function allowAllTypes($suffix = true) {
        $this->typeCheckingOn = false;
        if (!$suffix) {
            $this->suffix = '';  // empty string
        }

    }


    protected function checkName($file) {
        $this->newName = null;
        $nospaces = str_replace(' ', '_', $file['name']);
        if ($nospaces != $file['name']) {
            $this->newName = $nospaces;
        }
        $extension = pathinfo($nospaces, PATHINFO_EXTENSION);
        if (!$this->typeCheckingOn && !empty($this->suffix)) {
            if (in_array($extension, $this->notTrusted) || empty($extension)) {
                $this->newName = $nospaces . $this->suffix;
            }
        }
        if ($this->renameDuplicates) {
            $name = isset($this->newName) ? $this->newName : $file['name'];
            $existing = scandir($this->destination);
            if (in_array($name, $existing)) {
                // Endurskíra
                $basename = pathinfo($name, PATHINFO_FILENAME);
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $i = 1;
                do {
                    $this->newName = $basename . '_' . $i++;
                    if (!empty($extension)) {
                        $this->newName .= ".$extension";
                        $nyttNafn = $this->newName;
                    }
                } while (in_array($this->newName, $existing));

            }
        }
    }

    protected function checkSize($file)  {
        if ($file['error'] == 1 || $file['error'] == 2) {
            return false;
        } elseif ($file['size'] == 0) {
            $this->messages[] = $file['name'] . ' er tóm skrá.';
            return false;
        } elseif ($file['size'] > $this->max) {
            $this->messages[] = $file['name'] . ' er stærri en leyfðar skrár, hámarks stærð fyrir skrá er ('.$this->getMaxSize().').';
            return false;
        } else {
            return true;
        }
    }

    protected function moveFile($file)
    {
        $filename = "profile.jpg";

        $success = move_uploaded_file($file['tmp_name'], $this->destination . $filename);
        if ($success) {
            $result = $file['name'] . ' Aðgerð tókst';
            if (!is_null($this->newName)) {
                $result.=', og var endurskýrt ' . $this->newName;

            }
            $this->messages[] = $result;
        }
        else {
            $this->message[] = ' Aðgerð tókst ekki hjá ' . $file['name']; 		}
    }



    protected function checkType($file) {
        if (in_array($file['type'],$this->permitted)) {
            return true;
        } else {
            if (!empty($file['type'])) {
                $this->messages[] = $file['name'] . ' er ekki leyfð skráar týpa.';

            }
            return false;
        }
    }

    public function getMaxSize() {
        return number_format($this->max/1024, 1) . 'KB';
    }

    public function setMaxSize($num) {
        if (is_numeric($num) && $num > 0) {
            $this->max = (int) $num;
        }
    }

    public function getMessages() {
        return $this-> messages;
    }

    protected function getErrorMessage($file) {
        switch($file['error']) {
            case 1:
            case 2:
                $this->messages[] = $file['name'] . 'er of stór: (max: ' . $this->getMaxSize() . ').';
                break;
            case 3:
                $this->messages[] = $file['name'] . ' Var bara upphalað að hluta til, mæli með að byrja uppá nýtt.' ;
                break;
            case 4:
                $this->messages[] = 'Enginn skrá valinn';
                break;
            default:
                $this->messages[] = 'Sorry, there was a problem uploaded ' . $file['name'];
                break;
        }
    }

    public function __construct($path) {
        if (!is_dir($path) || !is_writable($path)) {
            throw new \Exception("$path Verður að vera til eða aðgengilegt.");
        }
        $this->destination = $path;
    }

    public function upload($renameDuplicates = true) {
        $this->renameDuplicates = $renameDuplicates;
        $uploaded = current($_FILES);
        if (is_array($uploaded['name'])) {
            // deal with multiple uploads
            foreach ($uploaded['name'] as $key => $value) {
                $currentFile['name'] = $uploaded['name'][$key];
                $currentFile['type'] = $uploaded['type'][$key];
                $currentFile['tmp_name'] = $uploaded['tmp_name'][$key];
                $currentFile['error'] = $uploaded['error'][$key];
                $currentFile['size'] = $uploaded['size'][$key];


                if ($this->checkFile($currentFile)) {
                    $this->moveFile($currentFile);

                    }




            }

        } else {

            if ($this->checkFile($uploaded)) {
                $this->moveFile($uploaded);





            }
        }
    }

}


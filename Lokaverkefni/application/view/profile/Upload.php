<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 4.4.2017
 * Time: 13:50
 */

namespace Upload;


class Upload {

    protected $destination;
    protected $max = 13371337;
    protected $messages = [];
    protected $permitted = [
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png',
    ];

    protected function checkFile($file) {
        return true;
    }

    protected function moveFile($file)
    {
        $success = move_uploaded_file($file['tmp_name'], $this->destination . $file['name']);
        if ($success) {
            $result = $file['name'] . 'Aðgerð tókst';
            $this->messages[] = $result;
        }
        else {
            $this->message[] = 'Aðgerð tókst ekki hjá' . $file['name']; 		}
    }

    public function getMessages() {
        return $this-> messages;
    }

    public function __construct($path) {
        if (!is_dir($path) || !is_writable($path)) {
            throw new \Exception("$path Verður að vera til eða aðgengilegt.");
        }

        $this->destination = $path;
    }

    public function upload() {
        $uploaded = current($_FILES);
        if ($this->checkFile($uploaded))
        {
            $this->moveFile($uploaded);
        }
    }
}
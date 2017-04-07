<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class Profile extends Model
{
    /**
     * Get all songs from database
     */
    public function getUserInfo($username)
    {

        $sql = "SELECT name, username,email,sex, pass, date_joined,profilepic FROM userbase WHERE username ='".$username."'";

        $query = $this->db->prepare($sql);
        $query->execute();


        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function validateForm()
    {
        if(!empty($_POST["username"])) {
        $sql = "SELECT count(*) as tala FROM userbase where username ='". $_POST["username"]. "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $object = $query->fetch();
        $row = array($object);
        $user_count = $row[0]->tala;
        if($user_count>0) echo "<span class='status-not-available'> Notendanafn er ekki laust.</span>";
        else echo "<span class='status-available'> Notendanafn er Laust.</span>";
    }
    }

    public function logout()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
    }

    public function checkforpic()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        $sql = "SELECT profilepic  FROM userbase where username ='". $_SESSION["username"]. "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $object = $query->fetch();
        $row = array($object);
        $userpic = $row[0]->profilepic;
        print $userpic;
        ob_get_clean();
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     * @param integer $song_id
     */
    public function logIn($username,$password)
    {
        $sql = "SELECT username  FROM userbase WHERE username = :username AND pass = :pass LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':pass' => $password);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function breyta($name,$pass,$username)
    {
        $sql = "UPDATE userbase SET name = :name, pass = :pass WHERE username = :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':pass' => $pass,':username' => $username);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }

    public function UploadDP()
    {

            ob_start();
            require APP . 'view/_templates/header.php';
            $username = $_SESSION['username'];
            require APP . 'Model/Upload.php';


            $destination = $_SERVER['DOCUMENT_ROOT'] . "/img/profile/".$username."/";;
            $max = 5000000;
            try {
                $loader = new Upload($destination);
                $loader->allowAllTypes(false);
                $loader->setMaxSize($max);
                $loader->upload();
                $result = $loader->getMessages();

                $path = URL . "/img/profile/".$username."/profile.jpg";

                $sql = "update userbase set profilepic = :path WHERE username = :username";
                $query = $this->db->prepare($sql);
                $parameters = array(':path' => $path, ':username' => $username);

                $query->execute($parameters);
                return $query;



            } catch (Exception $e) {
                echo $e->getMessage();

            }

            if (isset($result)){
                echo '<ul>';
                foreach ($result as $message) {
                    echo "<li>$message</li>";
                }
                echo "</ul>";
            }
            ob_get_clean();






    }

}




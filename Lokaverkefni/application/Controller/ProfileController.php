<?php

/**
 * Class SongsController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\Profile;

class ProfileController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {


        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        $profile = new Profile();
        $info = $profile->getUserInfo($_SESSION['username']);


        require APP . 'view/profile/index.php';

        require APP . 'view/_templates/footer.php';


    }

    public function logoutlink(){
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
        header("location: http://178.62.25.29/");
    }



    public function logout()
        {
        $notandi = new Profile();
        if(isset($_POST["logout"])) {
            print("isset");
            $notandi->logout();

        }
        print("logout");
            #header("location: http://178.62.25.29/");
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */

    public function validation()
    {
        $notandi = new Nyskraning();
        $notandi->validateForm();
    }

    /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteSong($song_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($song_id)) {
            // Instance new Model (Song)
            $Song = new Song();
            // do deleteSong() in model/model.php
            $Song->deleteSong($song_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'songs/index');
    }

    public function upload()
    {
        if (isset($_POST['upload'])) {
        $profile = new Profile();
        $profile->UploadDP();
        header('location: ' . URL . 'profile/');

        }
    }


    public function breyta()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["breyta"])) {
            // Instance new Model (Song)
            $profile = new Profile();
            // do updateSong() from model/model.php
            $profile->breyta($_POST["nafn"], $_POST["pass"], $_POST["user"]);

        }
        // where to go after song has been added
        header('location: ' . URL . 'profile/');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        // Instance new Model (Song)
        $Song = new Song();
        $amount_of_songs = $Song->getAmountOfSongs();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_songs;
    }

}

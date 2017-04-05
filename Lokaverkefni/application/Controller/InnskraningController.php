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

use Mini\Model\Innskraning;

class InnskraningController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/innskraning/index.php';
        require APP . 'view/_templates/footer.php';

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



    function innskra()
    {
        ob_start();
        require APP . 'view/_templates/header.php';

        if (isset($_POST['innskra'])) {
            $notandi = new Innskraning();
            $obj = $notandi->logIn($_POST['user'], $_POST['pass']);
            $ret = array($obj);
            print_r($ret);
            if ($ret[0]->username == $_POST['user']) {
                $_SESSION['username'] = $_POST['user'];
                ob_get_clean();
                header('location:'. URL.'profile' );

            } else {
                print "lykilorð";
            }


        }


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

<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 10.2.2017
 * Time: 10:01
 */

namespace MVC;


class model
{

private $baekur = array(array('id' => 0, 'Nafn' => "Smile",'Utgafa' => "Skoltaskik",'Ar' => 1994),array('id' => 1,'Nafn' => "PHP Extreme",'Utgafa' => "PHP Society",'Ar' => 2007),array('id' => 2,'Nafn' => "Litla Bláa Kannan",'Utgafa' => "Barnabækur EHF",'Ar' => 855));
private $valinbok;

    public function listiBoka()
    {

        return $this->baekur;
    }

    public function bokInfo($bok)
    {

        $this->valinbok = $bok;

    }

    public function skilabok()
    {
        foreach ($this->baekur as $titill) {
            if ($titill['id'] == $_GET['baekur']) {
                echo "<h1> Bók </h1> <br>";
                echo "Nafn Bókar: " . $titill['Nafn'] . "<br>";
                echo "Útgáfa Bókar: " . $titill['Utgafa'] . "<br>";
                echo "Útgáfu ár: " . $titill['Ar'] . "<br>";
            }



        }
    }



}
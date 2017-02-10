<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 27.1.2017
 * Time: 08:49
 */

namespace Videoleiguklasi;


class Videoleiga
{

    public $nafn;
    public $simi;
    public $biomyndir;


    public function __construct($name,$phone,$movies)
    {
        $this->nafn = $name;
        $this->simi = $phone;
        $this->biomyndir = $movies;
    }

    public function erMyndTil($movieName)
    {
        for ($i = 0; $i < count($this->biomyndir);$i++) {
            if ($movieName == $this->biomyndir[$i]->nafn) {
                print(" <b>er til</b>");
                return;
            }
        }
        print(" er ekki til");
    }

    function __toString()
    {
        return "<br> Nafn Videoleigu: ". $this->nafn . "<br>".
            "Símanumer: ". $this->simi."<br>".
            "Myndir á leigu:". count($this->biomyndir) ."<br>";
    }
}

class Sjoppa extends Videoleiga
{
    public $nammi;

    public function __construct($name, $phone, $movies,$candy)
    {
        parent::__construct($name, $phone, $movies);
        $this->nammi = $candy;
    }

    function __toString()
    {
        return "<br> Nafn Sjoppu: ". $this->nafn . "<br>".
            "Símanumer: ". $this->simi."<br>".
            "Nammi til sölu: ". $this->nammi."<br>".
            "Myndir á leigu: ". count($this->biomyndir) ."<br>";
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 16.1.2017
 * Time: 14:48
 */

Class Car {
    private $model;

    public function  setModel($model){
        $this->model = $model;
    }

    public  function getModel(){
        return $this->model;
    }


}

Class SportsCar extends Car{
    private $style = 'hraður og flottur';

    public function driveWithStyle()
    {
        return 'Drive a ' . $this ->getModel() .'<i> ' .$this->style.'</i>';
    }

}

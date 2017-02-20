<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 10.2.2017
 * Time: 10:02
 */


namespace MVC;


class controller
{
private $model;


public function __construct(Model $model)
{
$this->model = $model;
}

public function hvadaBok()
{

    $this->model->bokInfo($_GET["baekur"]);
}

}
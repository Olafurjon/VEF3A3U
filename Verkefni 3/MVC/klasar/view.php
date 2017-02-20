<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 10.2.2017
 * Time: 10:02
 */


namespace MVC;



class view
{
private $model;



public function __construct(Model $model)
{
    $model = new model();
    $this->model = $model;



}

    public function birtaBaekur()
    {

        $baekur = $this->model->listiBoka();
        echo '<form action="#" method="GET">';
        echo "Veldu Bók: ";
        echo '<select name="baekur" required="required">';
        foreach($baekur as $bok){
            echo "<option value=$bok[id]>".$bok['Nafn']."</option>";
        }
        echo "<br>";
        echo '<input type="submit" name="submit" value="Þessi Bók"/> </form>';


        if(isset($_GET["baekur"])) {
            $this->hvadabok();
        }

    }

    public function hvadabok()
    {
        echo "<h1> Bók </h1> <br>". $this->model->skilaBok();

    }

}
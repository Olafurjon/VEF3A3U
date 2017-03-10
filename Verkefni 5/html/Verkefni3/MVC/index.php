<?php
spl_autoload_register(function ($class_name) {
    $parts = explode('\\',$class_name);
    $class = end($parts);
    include "klasar/".$class.".php";
});
$model = new \MVC\model();
$controller = new \MVC\controller($model);
$view = new \MVC\view($model);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verkefni 3 - MVC</title>
</head>
<body>
<h2>Veldu Bók</h2>
<?php

$view->birtaBaekur();


?>


</body>
</html>
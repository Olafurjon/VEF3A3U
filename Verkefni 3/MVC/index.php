<?php
spl_autoload_register(function ($class_name) {
    $parts = explode('\\',$class_name);
    $class = end($parts);
    include "klasar/".$class.".php";
});
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verkefni 3 - MVC</title>
</head>
<body>
<h2>sup</h2>
<?php
$baekur = array("Nafn: Bók1 ,Útgáfa: Veisla, Útgáfuár: 1994","Nafn: Bók2 ,Útgáfa: Veisla2, Útgáfuár: 1995");
$bok = explode(",",$baekur[1]);
echo $bok[0]."<br>".$bok[1]."<br>".$bok[2];
?>


</body>
</html>
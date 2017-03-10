<?php
include ('Klasar/Biomynd.php');
include ('Klasar/Videoleiga.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Verkefni 2</title>
</head>
<body>
<h1>Verkefni 2 - Einföld OOP Sida </h1>
<hr>
<?php
$biomynd = new \Biomyndaklasi\Biomynd(10);
$bioleikari = new \Biomyndaklasi\Leikari(10);
$biomyndir = array();
echo "<br>Bíomyndaklasi\Biomynd <br>". $biomynd;
echo "<br> Biomyndklasi\Leikari <br>". $bioleikari;
for ($i = 1; $i < 9; $i++)
{
    $biomynd = new \Biomyndaklasi\Biomynd($i);
    array_push($biomyndir,$biomynd);
}
$biomyndir2 = array();
$x = 0;
for ($i = 1; $i < 16; $i++)
{
    $biomynd = new \Biomyndaklasi\Biomynd($x);
    array_push($biomyndir2,$biomynd);
    $x += 5;

}
$videoleiga = new \Videoleiguklasi\Videoleiga("VHS Heaven","555-5555",$biomyndir);
$sjoppa = new \Videoleiguklasi\Sjoppa("VHS og Chill","777-7771",$biomyndir2,"Popp, Kók og Prins");
echo $videoleiga;
echo $sjoppa;

echo "<br> Er Pirates of the Caribbean: At World's End til í Videoleigunni? <br>";
echo $videoleiga->erMyndTil("Pirates of the Caribbean: At World's End");

echo "<br> Er Pirates of the Caribbean: At World's End til í sjoppunni? <br>";
echo $sjoppa->erMyndTil("Pirates of the Caribbean: At World's End");
$movieName = "Pirates of the Caribbean: At World's End";

echo "<br>";




?>


</body>
</html>


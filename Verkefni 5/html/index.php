<?php
include('sites/car class.php');
include('sites/User.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 2</title>
</head>
<body>
<h1>Verkefni 2 </h1>
<hr>
<a href='http://178.62.67.77/sites/verkefnipdf.php' target='_blank'>Verkefnalýsing</a> <!--Opnar PDF skjalið í nýjum tab -->
<hr>
<h3>Svör</h3>
<p><u>1. 0.5% &nbsp Hver er munurinn á public, protected, og private þegar kemur að property og
        methods?</u><br>
<b>Public</b> er aðgengilegt af öllu sem er inní klassanum og því sem er utan klassann, semsagt þarf ekki að vera subclass, einnig er hægt að breyta gildum sem eru public svo lengi sem maður hefur einhverskonar aðgang að klasanum eða þá er includeaður eða þannig</p>
<p><b>Protected</b> er aðgengilegt ef þú ert að vinna ínni klasanum og jafnvel með subclassana, eða inherituðu klasanna hinsvegar ef þú ætlar að vinna með þetta utan klasa eða subclass þá ertu í vondum málum, þá getur þú ekkert gert, hvorki breytt eða kallað í</p>
<p><b>Private</b> er aðeins aðgengilegt úr klasanum sjálfum og aðeins eiginleikar í klasanum sjálfum geta breytt gildum, ekki einu sinni klasar sem eru að extenda eða erfa úr þessum geta breytt gildunum </p>
<p><u>2. 0.5%&nbsp Hvað er Inheritance? komdu með dæmi.</u></p>
<p><b>Inheritance</b> er þegar þú ert með klasa sem er kannski með functiona sem þú vilt nota aftur en í öðru samhengi og þá í staðinn fyrir að skrifa kóðann aftur þá er hægt að inherita hann eða extenda
    dæmi:</p>
<?php
echo("Ég bjó til klasan car class og í honum er parent klasinn sem er bara Car og er hann með módel breytuna og kalla ég í hann hér að neðan<br>");
$car1 = new Car();
$car1 ->setModel("Nissan Micra");
echo($car1->getModel());
echo("<br> núna kalla ég í child klasann eða Sportscar <br></vr>");
$sportscar = new SportsCar();
$sportscar->setModel('Ferrari');
echo($sportscar->driveWithStyle());
echo("<br> Þarna kallaði ég í set model aðferðina sem var í car klassanum og notaði hana í sportscar klasanum til að breyta bílnum úr micru í Ferrari og síðan kallaði ég i drivewithstyle functionið í sportscar til að birta hraður og flottur <br>");
?>
<p><u>3. 0.5% Hvað er autoloading?</u></p>
<p><b>spl_autoload_register</b>(function($class){<br>require_once "classes/{$class}.php";<br>});<br> er aljgör snilld þegar maður er kominn í rosalegta stórt verkefni og er jafnvel að nýta slatta af klösum en þarf kannski ekki að nota alla við hvert tilefni, þá svo lengi sem maður staðlar bara að skíra klasana sama og þú myndir skýra skrárnar sem þú býrð til skrárnar í, þá getur þú notað þessa skipun og þá kallar hann bara í viðeigandi require_once klasa eftir því hvað klasinn heitir</p>
<p><u>1% Búðu til class sem heitir User sem geymir gögn um notanda.</u>1<br> User þarf að hafa
    eftirfarandi:<br>
    Properties; email og password.<br>
    Methods: setPassword(), getPassword(), setEmail(), getEmail(),<br>
    Smiður sem tekur array sem parameter og upphafstillir notanda<br></p>
<p></p>
<?php
$standard = array("User","pass.123");
$notandi = new UserClass\User($standard);
echo $notandi->getEmail() . "<br>";
echo $notandi->getPassword();
?>
<br>
<p>Hérna að ofan er ég að kalla í get user og get pass og þessu er skilað úr default arrayinum í User.php sem er klasinn, hér fyrir neðan ætla ég að kalla í set á báðu og breyta þessu.</p>
<?php
$notandi->setEmail("Jonnipower@gmail.com");
$notandi->setPassword("***********totallyencryptað****");
echo $notandi->getEmail() . "<br>" . $notandi->getPassword();
?>
<br>
<p><u>0.5% Af hverju ættir þú að nota OOP í PHP? Hvenær væri það hugsanlega heppilegt og
        hvenær ekki?<br> Rökstuddu svar þitt!
    </u></p>
<p>Þetta sparar bara sérstaklega mikinn tíma og auðveldar það að vinna með kóðann ef maður er oft að vinna með sama hlutinn, t.d. eins og ef ég væri með bílasölu og ég ætlaði að adda öllum bílunum sem ég væri með í einhvern array eða lista, þá gæti ég náttúrulega hardkóðað allt
því það væri betra því ekki eru allir bílar eins en það væri pain, frekar myndi ég vera með eins og klassa system þar sem væri bara grunnklasi t.d. Ökutæki og það væri með basic info eins og t.d. litur, vélarafl, farþegafjöldi, keyrður, bein/sjálfskiptur etc...,  síðan væri ég með subclassa fyrir t.d. kannski sportbíll þar sem kæmu þá specific sportbílaupplýsingar fram
sem væri óþarfi eða ekki hægt að taka fram í hinu eða væri hægt nema það myndi bara vera null eða svo en það er ekki jafn kúl... kannski var ekki sniðugt að taka dæmi um bíla þar sem ég veit ekkert um þá... en allt svona væri kannski óþarfi ef þú ert að fara vinna með kannski bara einn bíl og setja á bland
þá er jafnvel fljótara að bara pikka upplýsingarnar um hann.</p>
<br>
<p><u>11%
    Búðu til einfalda OOP vefsíðu. Búðu til nokkra clasa sem þú notar í vefsíðunni.<br>
    Notaðu þér til stuðnings PHP OOP tutorial af eigin vali og með samþykki kennara.<br>
    Athugið að það er skilyrði að commenta kóða á íslensku.</u><br>
    <a href='http://178.62.67.77/OOPSida/Index.php' target='_blank'>Einföld OOP heimasíða</a>

</p>


</body>
</html>


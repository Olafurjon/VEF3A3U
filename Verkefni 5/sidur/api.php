<?php
include "includes.php";
$arion = file_get_contents("http://apis.is/currency/arion");
$results = json_decode($arion, true);
$shortName = array();
$askValue = array();
$bidValue = array();
$br = array();
foreach($results as $r)
{
  foreach ($r as $n) {
   array_push($shortName,$n['shortName']) ;
   array_push($askValue,$n['askValue']) ;
   array_push($bidValue,$n['bidValue']) ;
   array_push($br, $n['changeCur']);
  }
  
}


?>
<table>
  <tr>
    <th>Gjaldmiðill</th>
    <th>Kaup</th>
    <th>Sala</th>
    <th>Br.</th>
  </tr>
<?php
for ($i=0; $i < count($shortName) ; $i++) { 
  echo "<tr>".
          "<td>".$shortName[$i]."</td>".
          "<td>".$bidValue[$i]."</td>".
          "<td>".$askValue[$i]."</td>".
          "<td>".$br[$i]."</td>".
        "</tr>";

}

 ?>

</table>
<?php 

?>
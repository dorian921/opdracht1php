<?php
// naam: dorian
// 

$school = "TCR";
$naam = "dorian";
$dag = date("l");
$maandnum = date("w");
$today = date("j F Y");
$jaarnum = date("z");
$maandnaam = date("F");
$maandduur = date("t");
$schrikjaar = date("L");
$jaar = date("Y");


echo"hallo wereld <br>";

echo"ik zit op het " . $school . "<br>" ;
echo"ik ben "  . $naam . "<br>" ;

date_default_timezone_set("Europe/Amsterdam");

echo"het is vandaag $dag $today";

echo "<br>";

echo " vandaag is de $jaarnum/e dag van het jaar ";

echo "<br>";

echo " $dag is de $maandnum/e dag van de week";

echo "<br>";

echo " de maand $maandnaam heeft in totaal $maandduur dagen";

echo "<br>";

echo " het jaar $jaar is geen schrikkeljaar "






 





?>
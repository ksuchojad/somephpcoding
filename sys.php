<?php
include('dane.php');

$dozwolone=array('szukaj','lista','info'); //(1)
if(isset($_GET['pokaz']))$pokaz=$_GET['pokaz']; else $pokaz="";

if(!in_array($pokaz,$dozwolone)) $pokaz=$dozwolone[0];
if (file_exists($pokaz.'.htm')) include($pokaz.'.htm');
else if (file_exists($pokaz.'.php')) include($pokaz.'.php');
else echo('<span style="color:red;">Brak wskazanego pliku</span>');


?>
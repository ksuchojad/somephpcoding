<?php
echo('Dziś jest: <br /><b>'.date("d.m.Y").'r</b>');
echo('<br /><br />');
echo('Jest to: <br /><b>'.(date("z")+1));
echo("</b><br />dzień w roku");
echo('<br />');

switch(date("w")){
case 01: $dzien="poniedziałek"; break;
case 02: $dzien="wtorek"; break;
case 03: $dzien="środa"; break;
case 04: $dzien="czwartek"; break;
case 05: $dzien="piątek"; break;
case 06: $dzien="sobota"; break;
case 07: $dzien="niedziela"; break;
}


echo("Dzisiaj jest ".$dzien.".");

?>
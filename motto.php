<?php

$motto[]='Co jest lepsze: urodzić się dobrym czy zdołać się przeciwstawić swojej złej naturze?';
$motto[]='Wojna. Wojna nigdy się nie zmienia. Ale ludzie tak, przez ścieżki jakie przemierzają.';
$motto[]='motto3';
$motto[]='motto4';

$los=rand(0,count($motto)-1);
echo('<i>'.$motto[$los].'<i>');

?>
<h2> Lista nazwisk w bazie</h2>
<table style="width:90%; border: 1px solid green";>

<?php
	foreach($tel as $k=>$v)
	{
		echo ('<tr><td>' .$k. '</td><td>' .$v['telefon']. '</td><td>' .$v['adres']. '</td></tr> ');
	}

?>
</table>
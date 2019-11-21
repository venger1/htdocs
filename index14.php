<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
		<title> </title>
</head>
<body>

<?php

include "klasa.php";

$dzial=new dzialania();
//$dzial->liczba=5;
$dzial->setliczba(5);
print $dzial->czyParzysta( );
print $dzial->getliczba()."<br>";

print $dzial->autor."<br>";

$dzial->autor="Szymon"."<br>";
print $dzial->autor;

print $dzial->dodaj(7,5)."<br>";
print $dzial->odejmij(7,5);

?>
</body>
</html>
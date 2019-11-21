<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
		<title> </title>
</head>
<body>

<?php

class dzialania
{
	public $autor="Sebastian Piekarski";
	
	private $liczba;
	
	public function setliczba($x)
	{
		$this->liczba=$x;
	}
	
	public function getliczba()
	{
		return $this->liczba;
	}
	
	
	public function czyParzysta( )
	{
		$x=$this->liczba;
		if ($x%2==0) return "parzysta";
		return "nieparzysta";
	}
	
	public function __construct()
	{
		print"klasa zaczela dzialac"."<hr>";
	}
	
	public function __destruct()
	{
		print "<hr> zakończono prace";
	}
	public function dodaj($a,$b)
	{
		return $a+$b;
	}
	
		public function odejmij($a,$b)
	{
		return $a-$b;
	}
	
	
	
	
	
	
	
	
	
}
?>
</body>
</html>
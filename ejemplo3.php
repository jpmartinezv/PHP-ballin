<!DOCTYPE html>
<head>
	<TITLE>PHP and POO</TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
class Animal
{
	public $nombre;

	public function __construct($nombre)
	{
		$this->nombre = $nombre;
	}

	public function sonido(){
	
	}
}

class Leon extends Animal
{
	public function sonido(){
		print "Ruge<br>";
	}
}

class Perro extends Animal
{
	public function sonido(){
		print "Ladra<br>";
	}
}


$leon = new Leon("Gato");
$leon->sonido();

$perro = new Perro("Pluto");
$perro->sonido();
?>
</body>

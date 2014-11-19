<?php
class Persona{
	private $nombre;
	private $edad;

	public function __construct( $nombre, $edad )
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->showAll();
	}

	public function showAll()
	{
		print( $this->nombre . " " . $this->edad . "\n" );
	}
}

$persona1 = new Persona( "Newton", 76 );
?>

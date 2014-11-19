<!DOCTYPE html>
<head>
	<TITLE>PHP and POO</TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
class Menu
{
	private $list = array();
	public function __construct()
	{
	
	}

	public function cargarURL( $url, $name )
	{
		array_push($this->list, array( "url" => $url, "name" => $name ));
	}

	private function mostrarVetical()
	{
		foreach($this->list as $item)
		{
			print "<a href='".$item["url"]."'>".$item["name"]."</a><br>";
		}
	}

	private function mostrarHorizontal()
	{
		foreach($this->list as $item)
		{
			print "<a href='".$item["url"]."'>".$item["name"]."</a>  ";
		}
	}

	public function mostrar( $modo )
	{
		if( $modo == "Vertical")
			$this->mostrarVetical();
		else if( $modo == "Horizontal")
			$this->mostrarHorizontal();
		return;
	}
}

$menu = new Menu();

$menu->cargarURL("http://www.google.com", "Google");
$menu->cargarURL("http://www.msn.com", "MSN");
$menu->cargarURL("https://www.yahoo.com", "Yahoo");

$menu->mostrar("Vertical");
$menu->mostrar("Horizontal");
?>
</body>

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
		array_push($this->list, array($url, $name));
	}

	public function mostrarVetical()
	{
		foreach($this->list as $item)
		{
			print "<a href='".$item[0]."'>".$item[1]."</a><br>";
		}
	}

	public function mostratHorizontal()
	{
		foreach($this->list as $item)
		{
			print "<a href='".$item[0]."'>".$item[1]."</a>  ";
		}
	}
}

$menu = new Menu();

$menu->cargarURL("http://www.google.com", "Google");
$menu->cargarURL("http://www.msn.com", "MSN");
$menu->cargarURL("https://www.yahoo.com", "Yahoo");

$menu->mostrarVetical();
$menu->mostratHorizontal();
?>
</body>

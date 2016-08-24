<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>
	<?php 
	$lapicera = array("color"=>"negro", "marca"=>"bic", "trazo"=>"fino" , "precio"=>10);
	$lapicera = array("color"=>"negro", "marca"=>"bic", "trazo"=>"fino" , "precio"=>10);
	$lapicera = array("color"=>"negro", "marca"=>"bic", "trazo"=>"fino" , "precio"=>10);

	$listado = array("lapicera", "lapicera","lapicera");

	foreach ($listado as $lapicera => $value) {
		echo $lapicera['color'];
	}

	 ?>

</body>
</html>
<?php 
//echo $_GET["descripcion"] ."<br>";

//echo $_GET["geolocation"] ."<br>";

if(isset($_GET["geolocationcheck"])){
	//echo $_GET["latitudg"]. "<br>";
	//echo $_GET["longitudg"]. "<br>";

	$lat= $_GET["latitudg"];
	$log= $_GET["longitudg"];
}else{
	//echo $_GET["latitud"] ."<br>";
//echo $_GET["longitud"] ."<br>";
$lat= $_GET["latitud"];
	$log= $_GET["longitud"];
}

$texto= $_GET["descripcion"]."}". $lat ."/". $log. ",";
//echo $texto;
$fp= fopen("peo.txt", 'a+');
fwrite($fp,$texto);

#vamos a leer uno x uno

$file = new SplFileObject("peo.txt");

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.

    echo $file->fgets()."<br>";
}

// Unset the file to call __destruct(), closing the file handle.
$file = null;
 ?>
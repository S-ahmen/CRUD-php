<?php

$xml = simplexml_load_file("datos.xml");

$nuevo = $xml->addChild("expidiente");
$nuevo->addChild("id", $_POST["id"]);
$nuevo->addChild("titulo", $_POST["titulo"]);
$nuevo->addChild("curso", $_POST["curso"]);
$nuevo->addChild("horas", $_POST["horas"]);

$xml->asXML("datos.xml");

echo "guardado. <a href='leer.php'>Volver</a>";
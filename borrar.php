<?php

$id = $_GET['id'];
$xml = simplexml_load_file("datos.xml");

foreach($xml->expidiente as $i => $exp) {
    if($exp->id == $id) {
        unset($xml->expidiente[$i]);
    }
}

$xml->asXML("datos.xml");
header("location: leer.php");
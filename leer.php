<?php
$xml = simplexml_load_file("datos.xml");

echo "<h1>Lista de titulos</h1>";
echo "<table border='4'>";
echo "<tr><th>ID</th><th>titulo</th><th>curso</th><th>horas</th></tr>";


foreach($xml->expidiente as $exp) {
echo "<tr>";
echo "<td>" . $exp->id . "</td>";
echo "<td>" . $exp->titulo . "</td>";
echo "<td>" . $exp->curso . "</td>";
echo "<td>" , $exp->horas  . "</td>";
echo "</tr>";
}
echo "</table>";
<?php

include ("conecta.php");
$nombre = $_GET["nombre1"];

$edad = $_GET["edad"];
$nom = $_GET["nombre"];
$sexo = $_GET['sexo'];
$signo = $_GET['signo'];
$ojos = $_GET['ojos'];
$estatura = $_GET["estatura"];
$peso = $_GET["peso"];


if (isset($_GET['bailar'])) {
    $bailar = "Bailar";
} else {
    $bailar = "";
}
if (isset($_GET['Leer'])) {
    $leer = "Leer";
} else {
    $leer = "";
}
if (isset($_GET['musica'])) {
    $Musica = "Escuchar musica";
} else {
    $Musica = "";
}
if (isset($_GET['Volibol'])) {
    $voli = "Jugar volibol";
} else {
    $voli = "";
}

if ($_GET['descripcion'] != "") {
    $descripcion = $_GET['descripcion'];
} else {
    $descripcion = "Ninguna";
}


if ($edad != "" && $nombre != "") {
    mysql_select_db("buscapareja");
    mysql_query("UPDATE  pareja SET nombre= '" . $nom . "' ,edad= '" . $edad . "' ,sexo= '" . $sexo . "' ,signo= '" . $signo . "' "
            . ",bailar= '" . $bailar . "' ,leer= '" . $leer . "' ,musica= '" . $Musica . "' ,voli= '" . $voli . "' ,ojos= '" . $ojos . "'"
            . ",descripcion= '" . $descripcion . "' ,estatura= '" . $estatura . "' ,peso= '" . $peso . "'
  WHERE nombre='" . $nombre . "'");
} else {
    echo "NO SE GUARDA, EDAD O NOMBRE ESTAN VACIOS";
}
echo"<script> location.href='Modificar.php'</script>";
?>
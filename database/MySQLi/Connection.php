<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

//Forma orientada a Objetos
$mysqli = new mysqli($server, $username, "", $database);

if ($mysqli->connect_errno) {
    die("Fallo la conexion: {$mysqli->connect_error}");
};

//esto nos ayuda a poder usar cualquier caracter en nuestras consultas
$setnames = $mysqli->prepare("SET NAMES utf8");
$setnames->execute();

var_dump($setnames);

?>
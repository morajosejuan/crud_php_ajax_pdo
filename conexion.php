<?php
$usuario ="root";
$password ="";
$base_datos= "crud_usuarios";
$conexion = new PDO ("mysql:host=localhost;dbname=$base_datos",$usuario, $password);
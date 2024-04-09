<?php
function subirimagen(){
    if (isset($_FILES["imagen_usuario"])){
        $extension =explode('.',$_FILES["imagen_usuario"]['name']);
        $nuevo_nombre = rand(). '.' .$extension[1];
        $ubicacion = './img/'.$nuevo_nombre;
        move_uploaded_file($_FILES["imagen_usuario"]['tmp_name'],$ubicacion);
        return $nuevo_nombre;
    }
}

function obtener_nombre_imagen($id_usuario){
    include('conexion.oho');
    $stmt = $conexion->prepare("SELECT imagen FROM usuarios WHERE id='$id_usuario ");
    $stmt->execute();
    $resultado= $stmt->fetchall();
    foreach($resultado as $fila){
        return $fila["imagen"];
    }
}

function obtener_todos_registros(){
    include('conexion.oho');
    $stmt = $conexion->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    $resultado= $stmt->fetchall();
    return $stmt->rowCount();
}
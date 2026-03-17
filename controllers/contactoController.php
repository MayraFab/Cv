<?php

include("../config/conexion.php");
include("../models/contactoModel.php");

session_start();

// Verificar que sea una petición POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    
    $resultado = guardarContacto($conn, $nombre, $email, $mensaje);
    
    if($resultado['success']){
        $_SESSION['message'] = $resultado['message'];
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = $resultado['message'];
        $_SESSION['type'] = 'error';
    }
} else {
    $_SESSION['message'] = 'Método de petición no válido';
    $_SESSION['type'] = 'error';
}

header("Location: ../index.php");
exit();

?>
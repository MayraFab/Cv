<?php

function guardarContacto($conn, $nombre, $email, $mensaje){

        if(empty($nombre) || empty($email) || empty($mensaje)){
                return array('success' => false, 'message' => 'Todos los campos son requeridos');
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return array('success' => false, 'message' => 'El email no es válido');
        }
        
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if($stmt === false){
                return array('success' => false, 'message' => 'Error en la consulta: ' . $conn->error);
        }

        $stmt->bind_param('sss', $nombre, $email, $mensaje);

        if($stmt->execute()){
                $stmt->close();
                return array('success' => true, 'message' => 'Mensaje guardado correctamente');
        } else {
                $error = $stmt->error;
                $stmt->close();
                return array('success' => false, 'message' => 'Error al guardar: ' . $error);
        }
}

?>
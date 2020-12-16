<?php

if($_POST['accion'] == 'crear'){
    //Crear una nueva incercion en la base de datos
    //Primero accedemos a la bd.
    require_once('../funciones/bd.php');

    //Sanatizar los inputs
    $nombre = filter_var($_POST['nombre'], FILTER_SANATIZE_STRING);
    $empresa = filter_var($_POST['empresa'], FILTER_SANATIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANATIZE_STRING);

    try {
        $stmt = $conn->prepare("INSERT INTO contactos (nombre, empresa, telefono) VALUES (?, ?, ?)"); 
        $stmt->bind_param("sss", $nombre, $empresa, $telefono);
        $stmt->execute();
        if($stmt->affected_rows == 1){
            $respuesta = array(
                'respuesta' => 'correcto',
                'datos' => array(
                    'nombre' => $nombre, 
                    'empresa' => $empresa,
                    'telefono' => $telefono,     
                    'id_insertado' => $stmt->insert_id   
                )
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    


    echo json_encode($respuesta);
}
?>
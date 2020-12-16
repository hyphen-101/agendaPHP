<?php

// Credenciales de la base de datos
define('BD_NOMBRE', 'agendaphp');
define('BD_PASSWORD', 'root');
define('BD_HOST', 'localhost');
define('BD_USUARIO', 'root');

$conn = new mysqli(BD_HOST, BD_USUARIO, BD_PASSWORD, BD_NOMBRE);
//echo $conn->ping();
?>
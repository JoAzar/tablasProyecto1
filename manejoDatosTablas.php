<?php
    require_once '../revisarConexion.php';
    
    function Conexion() {
        $servername = "";
        $username = "";
        $password = "";
        $database = "";
        $conexion = mysqli_connect($servername, $username, $password, $database);
        
        return $conexion;  
    }   

?>

<?php
    require_once '../revisarConexion.php';
    
    function Conexion() {
        $servername = "localhost";
        $username = "root";
        $password = "mag021$";
        $database = "empleados";
        $conexion = mysqli_connect($servername, $username, $password, $database);
        
        return $conexion;  
    }   
?>
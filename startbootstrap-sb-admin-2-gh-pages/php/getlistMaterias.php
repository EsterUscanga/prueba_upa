<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//obtener lista de materias, de la tabla de materias para mostrarlo en el select de vista_materias.html

$sqlRequestNombresMaterias = "SELECT nombre_materia from materias";   
$sqlRequestTotalMaterias = "SELECT count(*) from materias";   

$resultNombresMaterias = $conn->query($sqlRequestNombresMaterias); //save resultNombres$resultNombresMaterias
$resultTotalMaterias = $conn->query($sqlRequestNombresMaterias); //save result

?> 
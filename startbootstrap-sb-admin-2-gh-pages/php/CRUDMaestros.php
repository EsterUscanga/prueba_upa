<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_maestro'];
    $apellido = $_POST['apellido_maestro'];
    $personal = $_POST['correo_upa'];
    $institucional = $_POST['correo_personal'];
    $grado = $_POST['grado_academico'];
    $especialidad = $_POST['especialidad'];

  
  	$sql = "INSERT INTO maestros(nombre_maestro, apellido_maestro, correo_upa, correo_personal, grado_academico, especialidad) 
            VALUES ('{$name}', '{$apellido}' , '{$personal}', '{$institucional}', '{$grado}', '{$especialidad}')";
  	mysqli_query($conn, $sql);
  	exit();
  }
  
  // Retrieve comments from database
  $sql = "SELECT * FROM maestros order by apellido asc";
  $result = mysqli_query($conn, $sql);
  $option = '<select id="selectMateria" class="form-control" onchange="showMateria()">'; 
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="'. $row['nombre_materia'] .'" id="' . $row['nombre_materia'] . '">'. $row['nombre_materia'] .'</option>';
  }
  $option .= '</select>';

?>
 

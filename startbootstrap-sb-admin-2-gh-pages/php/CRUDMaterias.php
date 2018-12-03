<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_materia'];
  	$sql = "INSERT INTO materias (nombre_materia) VALUES ('{$name}')";
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_POST['delete'])) {
    $name = $_POST['nombre_materia'];
  	$sql = "DELETE FROM materias WHERE nombre_materia = "+$name;
  	mysqli_query($conn, $sql);
  	exit();
  }
  
  $sql = "SELECT * FROM materias order by nombre_materia asc";
  $result = mysqli_query($conn, $sql);
  $option = '<select id="selectMateria" class="form-control" onchange="showMateria()">'; 
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="'. $row['nombre_materia'] .'" id="' . $row['nombre_materia'] . '">'. $row['nombre_materia'] .'</option>';
  }

  $option .= '</select>';
?>
 

<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_materia'];
  	$sql = "INSERT INTO materias (nombre_materia) VALUES ('{$name}')";
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_GET['getInfo'])) {
    $id_materia = $_GET['id_materia'];
    $sqlInputs = "SELECT * FROM materias where id_materia = {$id_materia}";
    $result = mysqli_query($conn, $sqlInputs);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
    exit();
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id_materia'];
    $name = $_POST['nombre_materia'];

    $sql = "UPDATE materias SET nombre_materia = '{$name}' WHERE id_materia = {$id}"; 
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_GET['delete'])) {
    $id = $_GET['id_materia'];
  	$sql = "DELETE FROM materias WHERE id_materia=" . $id;
    mysqli_query($conn, $sql);
    echo $id;
  	exit();
  }
  
  $sql = "SELECT * FROM materias order by nombre_materia asc";
  $result = mysqli_query($conn, $sql);
  $option = '<select id="selectMateria" class="form-control">'; 
  $option .= '<option>Selecciona materia</option>';
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="'. $row['nombre_materia'] .'" id="' . $row['id_materia'] . '">'. $row['nombre_materia'] .'</option>';
  }
  $option .= '</select>';
?>
 

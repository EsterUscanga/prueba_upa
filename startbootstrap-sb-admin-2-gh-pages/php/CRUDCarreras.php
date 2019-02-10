<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_carrera'];
  	$sql = "INSERT INTO carreras (nombre_carrera) VALUES ('{$name}')";
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_GET['getInfo'])) {
    $id_carrera = $_GET['id_carrera'];
    $sqlInputs = "SELECT * FROM carreras where id_carrera = {$id_carrera}";
    $result = mysqli_query($conn, $sqlInputs);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
    exit();
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id_carrera'];
    $name = $_POST['nombre_carrera'];

    $sql = "UPDATE carreras SET nombre_carrera = '{$name}' WHERE id_carrera = {$id}"; 
  	mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_GET['delete'])) {
    $id = $_GET['id_carrera'];
  	$sql = "DELETE FROM carreras WHERE id_carrera=" . $id;
    mysqli_query($conn, $sql);
    echo $id;
  	exit();
  }
  
  $sql = "SELECT * FROM carreras order by nombre_carrera asc";
  $result = mysqli_query($conn, $sql);
  $option = '<select id="selectCarrera" class="form-control">'; 
  $option .= '<option>Selecciona Carrera</option>';
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="'. $row['nombre_carrera'] .'" id="' . $row['id_carrera'] . '">'. $row['nombre_carrera'] .'</option>';
  }
  $option .= '</select>';
?>
 

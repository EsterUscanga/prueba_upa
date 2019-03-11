<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_edificio'];
  	$sql = "INSERT INTO edificios (nombre_edificio) VALUES ('{$name}')";
    mysqli_query($conn, $sql);
  	exit();
  }

  if (isset($_GET['getInfo'])) {
    $id_edificio = $_GET['id_edificio'];
    $sqlInputs = "SELECT nombre_edificio FROM edificios join carreras WHERE id_edificio = '{$id_edificio}'";
    $result = mysqli_query($conn, $sqlInputs);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
    exit();
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id_edificio'];
    $name = $_POST['nombre_edificio'];

    $sql = "UPDATE edificios SET nombre_edificio = '{$name}' WHERE id_edificio = {$id}"; 
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
  
  $optionEdificio = "SELECT * FROM edificios order by nombre_edificio asc";
  $resultEdificio = mysqli_query($conn, $optionEdificio);
  $selectEdificio = '<select id="selectEdificio" class="form-control">'; 
  while ($row = mysqli_fetch_array($resultEdificio)){
    $selectEdificio .= '<option value="'. $row['nombre_edificio'] .'" id="' . $row['id_edificio'] . '">'. $row['nombre_edificio'] .'</option>';
  }
  $selectEdificio .= '</select>';

?>
 

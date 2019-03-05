<?php
  include 'connetion.php';

  if (isset($_POST['save'])) {
    $name = $_POST['nombre_grupo'];
    $id_carrera = $_POST['id_carrera'];
  	$sql = "INSERT INTO grupos (nombre_grupo, id_carrera) VALUES ('{$name}', '{$id_carrera}')";
    mysqli_query($conn, $sql);
    echo "hola";
  	exit();
  }

  if (isset($_GET['getInfo'])) {
    $id_grupo = $_GET['id_grupo'];
    $sqlInputs = "SELECT nombre_grupo, nombre_carrera FROM grupos join carreras WHERE id_grupo = '{$id_grupo}' AND grupos.id_carrera = carreras.id_carrera";
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
  
  $optionGrupo = "SELECT * FROM grupos order by nombre_grupo asc";
  $resultGrupo = mysqli_query($conn, $optionGrupo);
  $selectGrupo = '<select id="selectGrupo" class="form-control">'; 
  while ($row = mysqli_fetch_array($resultGrupo)){
    $selectGrupo .= '<option value="'. $row['nombre_grupo'] .'" id="' . $row['id_grupo'] . '">'. $row['nombre_grupo'] .'</option>';
  }
  $selectGrupo .= '</select>';

  $sql = "SELECT * FROM carreras order by nombre_carrera asc";
  $result = mysqli_query($conn, $sql);
  $optionCarrera = '<select id="selectCarrera" class="form-control">'; 
  $optionCarrera .= '<option value="select">Selecciona Carrera</option>';
  while ($row = mysqli_fetch_array($result)){
    $optionCarrera .= '<option value="'. $row['nombre_carrera'] .'" id="' . $row['id_carrera'] . '">'. $row['nombre_carrera'] .'</option>';
  }
  $optionCarrera .= '</select>';
?>
 

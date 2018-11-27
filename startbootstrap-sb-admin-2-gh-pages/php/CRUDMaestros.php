 <?php
  include 'connetion.php';

  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }

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

 
  if (isset($_GET['getInfo'])) {
    $id_maestro = $_GET['id_maestro'];
    $sqlInputs = "SELECT * FROM maestros where id_maestro = {$id_maestro}";
    $result = mysqli_query($conn, $sqlInputs);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
    exit();
  }
  
  $sqlOption = "SELECT * FROM maestros order by apellido_maestro asc";
  $result = mysqli_query($conn, $sqlOption);
  $option = '<select id="selectProfesor" class="form-control">'; 
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="" id=" '. $row['id_maestro'] .'">' . $row['nombre_maestro'] . ' '. $row['apellido_maestro'] .'</option>';
  }
  $option .= '</select>';

?>
 

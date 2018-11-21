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

  if (isset($_GET["getInfo"])) {
    $name = $_GET["w1"];
    $sqlInputs = "SELECT * FROM maestros where nombre_maestro = {$name}";
  }
  
  // Retrieve comments from database
  $sqlOption = "SELECT * FROM maestros order by apellido_maestro asc";
  $result = mysqli_query($conn, $sqlOption);
  $option = '<select id="selectProfesor" class="form-control">'; 
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="" id="'. $row['id_maestro'] .'">' . $row['nombre_maestro'] . ' '. $row['apellido_maestro'] .'</option>';
  }
  $option .= '</select>';
?>
 

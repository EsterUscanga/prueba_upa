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
    $GLOBALS['id_maestroTraer'] = $_GET['id_maestro'];
    $sqlInputs = "SELECT * FROM maestros where id_maestro = {$id_maestroTraer}";
    $result = mysqli_query($conn, $sqlOption);
    $inputname = $result['nombre_maestro'];
    $apellidos = explode(" ", $result['apellido_maestro']);
    $inputpaterno = $apellidos[0];
    $inputmaterno = $apellidos[1];
    $inputpersonal = $result['correo_upa'];
    $inputinstitucional = $result['correo_personal'];
    $inputgrado = $result['grado_academico'];
    $l = false;
    $m = false;
    $d = false;
    switch ($inputgrado) {
      case 'LICENCIATURA':
          $l = true;
          break;
      case 'MAESTRIA':
          $m = true;
          break;
      case 'DOCTORADO':
          $d = true;
          break;
    }
    $inputespecialidad = $result['especialidad'];
    exit();
  }
  
  // Retrieve comments from database
  $sqlOption = "SELECT * FROM maestros order by apellido_maestro asc";
  $result = mysqli_query($conn, $sqlOption);
  $option = '<select id="selectProfesor" class="form-control">'; 
  while ($row = mysqli_fetch_array($result)){
    $option .= '<option value="" id=" '. $row['id_maestro'] .'">' . $row['nombre_maestro'] . ' '. $row['apellido_maestro'] .'</option>';
  }
  $option .= '</select>';

?>
 

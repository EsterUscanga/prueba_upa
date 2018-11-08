<?php
  include 'connetion.php';

  //obtener lista de materias, de la tabla de materias para mostrarlo en el select de vista_materias.html

  $sql = "SELECT nombre_materia from materias";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()){
    echo '<option value="'.$row['nombre_materia'].'">'.$row['nombre_materia'].'</option>';
  }
}
?>
 
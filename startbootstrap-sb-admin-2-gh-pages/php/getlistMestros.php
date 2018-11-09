<?php
  include 'connetion.php';

  //obtener lista de materias, de la tabla de materias para mostrarlo en el select de vista_materias.html

  $sql = "SELECT id_maestro, nombre_maestro, apellido_maestro from maestros";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()){
    echo '<option value="'.$row['id_maestro'].'" name="nombre">'.$row['nombre_maestro'].' '.$row['apellido_maestro'].'</option>';
  }
}
?>
 
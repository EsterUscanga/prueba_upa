<?php
  include 'connetion.php';
  $optionMateria = "SELECT * FROM materias order by nombre_materia asc";
  $resultMateria = mysqli_query($conn, $optionMateria);
  $selectMateria = '<select id="selectMateria" class="form-control">'; 
  while ($row = mysqli_fetch_array($resultMateria)){
    $selectMateria .= '<option value="" id=" '. $row['id_materia'] .'">' . $row['nombre_materia'] . '</option>';
  }
  $selectMateria .= '</select>';

  $optionMaestro = "SELECT * FROM maestros order by apellido_maestro asc";
  $resultMaestro = mysqli_query($conn, $optionMaestro);
  $selectMaestro = '<select id="selectProfesor" class="form-control">'; 
  while ($row = mysqli_fetch_array($resultMaestro)){
    $selectMaestro .= '<option value="" id=" '. $row['id_maestro'] .'">' . $row['nombre_maestro'] . ' '. $row['apellido_maestro'] .'</option>';
  }
  $selectMaestro .= '</select>';

  $optionGrupo = "SELECT * FROM grupos order by nombre_grupo asc";
  $resultGrupo = mysqli_query($conn, $optionGrupo);
  $selectGrupo = '<select id="selectGrupo" class="form-control">'; 
  while ($row = mysqli_fetch_array($resultGrupo)){
    $selectGrupo .= '<option value="'. $row['nombre_grupo'] .'" id="' . $row['id_grupo'] . '">'. $row['nombre_grupo'] .'</option>';
  }
  $selectGrupo .= '</select>';
  
?>
 

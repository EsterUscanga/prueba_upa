$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    let name = $('#regresarNombre').val()
    let paterno = $('#regresarApellidoPaterno').val()
    let materno = $('#regresarApellidoMaterno').val()
    let personal = $('#regresarCorreoPersonal').val()
    let institucional = $('#regresarCorreoInstitucional').val()
    let grado = $('#regresarGradoAcademico').val()
    let especialidad = $('#regresarEspecialidad').val()
    $.ajax({
      url: '../php/CRUDMaestros.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_maestro': name,
        'apellido_maestro': paterno + ' ' + materno,
        'correo_upa': institucional,
        'correo_personal': personal,
        'grado_academico': grado,
        'especialidad': especialidad,

      },
      success: function (response) {
        $('#regresarNombre').val('')
        $('#regresarApellidoPaterno').val('')
        $('#regresarApellidoMaterno').val('')
        $('#regresarCorreoPersonal').val('')
        $('#regresarCorreoInstitucional').val('')
        $('#regresarGradoAcademico').val('')
        $('#regresarEspecialidad').val('')

        $('#select').append(response)
      }
    })
  })
})

$("#selectProfesor").change(function() {
  let id = $(this).children(":selected").attr("id");
  $.ajax({
    url: '../php/CRUDMaestros.php',
    type: 'GET',
    data: {
      'getInfo': 1,
      'id_maestro': id,
    }
  })
})

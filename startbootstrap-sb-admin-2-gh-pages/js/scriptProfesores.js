$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    var name = $('#regresarNombre').val()
    var paterno = $('#regresarApellidoPaterno').val()
    var materno = $('#regresarApellidoMaterno').val()
    var personal = $('#regresarCorreoPersonal').val()
    var institucional = $('#regresarCorreoInstitucional').val()
    var grado = $('#regresarGradoAcademico').val()
    var especialidad = $('#regresarEspecialidad').val()
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


function showMateria() {
  var name = $('#regresarNombre').val()
  var paterno = $('#regresarApellidoPaterno').val()
  var materno = $('#regresarApellidoMaterno').val()
  var personal = $('#regresarCorreoPersonal').val()
  var institucional = $('#regresarCorreoInstitucional').val()
  var grado = $('#regresarGradoAcademico').val()
  var especialidad = $('#regresarEspecialidad').val()
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
}
function cancel() {
  document.getElementById("regresar").value = " "          
}

$("#selectProfesor").change(function() {
  var id = $(this).children(":selected").attr("id");
  window.location.href = '../php/CRUDMaestros.php?w1=' + name
  $.ajax({
    url: '../php/CRUDMaestros.php',
    type: 'GET',
    data: {
      'getInfo': 1,
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

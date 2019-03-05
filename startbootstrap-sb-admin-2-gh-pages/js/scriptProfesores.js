$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    let name = $('#regresarNombre').val()
    let apellidos = $('#regresarApellido').val()
    let personal = $('#regresarCorreoPersonal').val()
    let institucional = $('#regresarCorreoInstitucional').val()
    let grado = $('#regresarGradoAcademico').val()
    let especialidad = $('#regresarEspecialidad').val()
    $.ajax({
      url: '../php/CRUDMaestros.php',
      type: 'POST',
      data: {
        'save': true,
        'nombre_maestro': name,
        'apellido_maestro': apellidos,
        'correo_upa': institucional,
        'correo_personal': personal,
        'grado_academico': grado,
        'especialidad': especialidad,
      },
      success: function (response) {
        alert("Registro agregado")
      }
    })
  })

  $("#selectProfesor").change(function() {
    let id = $(this).children(":selected").attr("id")
    $('#regresarEspecialidad').val(obj["select"])  
    $.ajax({
      url: '../php/CRUDMaestros.php',
      type: 'GET',
      data: {
        'getInfo': true,
        'id_maestro': id,
      },
      success: function(response){
        const obj = JSON.parse(response)
        $('#regresarNombre').val(obj["nombre_maestro"])
        $('#regresarApellido').val(obj["apellido_maestro"])
        $('#regresarCorreoPersonal').val(obj["correo_upa"])
        $('#regresarCorreoInstitucional').val(obj["correo_personal"])
        $('#regresarGradoAcademico').val(obj["grado_academico"])         
        $('#regresarEspecialidad').val(obj["especialidad"])  
      }
    })

    $(document).on('click', '#modificar', function () {
      let name = $('#regresarNombre').val()
      let apellidos = $('#regresarApellido').val()
      let personal = $('#regresarCorreoPersonal').val()
      let institucional = $('#regresarCorreoInstitucional').val()
      let grado = $('#regresarGradoAcademico').val()
      let especialidad = $('#regresarEspecialidad').val()
      $.ajax({
        url: '../php/CRUDMaestros.php',
        type: 'POST',
        data: {
          'update': true,
          'id_maestro': id,
          'nombre_maestro': name,
          'apellido_maestro': apellidos,
          'correo_upa': institucional,
          'correo_personal': personal,
          'grado_academico': grado,
          'especialidad': especialidad,
  
        }
      })
    })

    $(document).on('click', '#borrar', function () {
      $.ajax({
        url: '../php/CRUDMaestros.php',
        type: 'GET',
        data: {
          'delete': true,
          'id_maestro': id,
        },
        success: function(response){   
          $("#selectProfesor option[value='"+response+"']").remove()
        }
      })
    })
  })
  
})

function cancel() {
  $('#regresarNombre').val('')
  $('#regresarApellido').val('')
  $('#regresarCorreoPersonal').val('')
  $('#regresarCorreoInstitucional').val('')
  $('#regresarGradoAcademico').val('')
  $('#regresarEspecialidad').val('')         
}

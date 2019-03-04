
$(document).ready(function () {

  $(document).on('click', '#agregar', function () {
    document.write('hol')
    let grupo = $('#regresarGrupo').val()
    let carrera = $('#selectCarrera').children(":selected").attr("id");
    $.ajax({
      url: '../php/CRUDGrupos.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_grupo' : grupo,
        'id_carrera' : carrera
      },
      success: function (response) {
        $('#selectcarrera').append(response)
        alert("Registro agregado")
      }
    })
  })

  $("#selectGrupo").change(function() {
    let id = $(this).children(":selected").attr("id")
    $.ajax({
      url: '../php/CRUDGrupos.php',
      type: 'GET',
      data: {
        'getInfo': true,
        'id_grupo': id,
      },
      success: function(response){
        alert(response)
        const obj = JSON.parse(response)
        alert(obj['nombre_carrera'])
        $("#regresarGrupo").val(obj['nombre_grupo'])
        $("#selectCarrera").val(obj['nombre_carrera'])
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

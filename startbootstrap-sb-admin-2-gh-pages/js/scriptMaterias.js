$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    var name = $('#regresar').val()
    $.ajax({
      url: '../php/CRUDMaterias.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_materia': name,
      },
      success: function (response) {
        $('#regresar').val('')
        $('#selectMateria').append(response)
        alert("Registro agregado")

      }
    })
  })

  $("#selectMateria").change(function () {
    let id = $(this).children(":selected").attr("id")
    $.ajax({
      url: '../php/CRUDMaterias.php',
      type: 'GET',
      data: {
        'getInfo': true,
        'id_materia': id,
      },
      success: function (response) {
        const obj = JSON.parse(response)
        $('#regresar').val(obj["nombre_materia"])
      }
    })

    $(document).on('click', '#modificar', function () {
      let name = $('#regresar').val()
      $.ajax({
        url: '../php/CRUDMaterias.php',
        type: 'POST',
        data: {
          'update': true,
          'id_materia': id,
          'nombre_materia': name,
        }
      })
    })

    $(document).on('click', '#borrar', function () {
      $.ajax({
        url: '../php/CRUDMaterias.php',
        type: 'GET',
        data: {
          'delete': true,
          'id_materia': id,
        },
        success: function (response) {
          $("#selectMateria option[value='"+response+"']").remove()
        }
      })
    })
  })
})

function cancel() {
  $('#regresar').val('')
}
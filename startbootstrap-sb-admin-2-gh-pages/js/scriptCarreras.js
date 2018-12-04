$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    var name = $('#regresar').val()
    $.ajax({
      url: '../php/CRUDCarreras.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_carrera': name,
      },
      success: function (response) {
        $('#regresar').val('')
        $('#selectcarrera').append(response)
        alert("Registro agregado")

      }
    })
  })

  $("#selectCarrera").change(function () {
    let id = $(this).children(":selected").attr("id")
    $.ajax({
      url: '../php/CRUDCarreras.php',
      type: 'GET',
      data: {
        'getInfo': true,
        'id_carrera': id,
      },
      success: function (response) {
        const obj = JSON.parse(response)
        $('#regresar').val(obj["nombre_carrera"])
      }
    })

    $(document).on('click', '#modificar', function () {
      let name = $('#regresar').val()
      $.ajax({
        url: '../php/CRUDCarreras.php',
        type: 'POST',
        data: {
          'update': true,
          'id_carrera': id,
          'nombre_carrera': name,
        }
      })
    })

    $(document).on('click', '#borrar', function () {
      $.ajax({
        url: '../php/CRUDCarreras.php',
        type: 'GET',
        data: {
          'delete': true,
          'id_carrera': id,
        },
        success: function (response) {
          $("#selectCarrera option[value='"+response+"']").remove()
        }
      })
    })
  })
})

function cancel() {
  $('#regresar').val('')
}
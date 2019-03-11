
$(document).ready(function () {

  $(document).on('click', '#agregar', function () {
    let edificio = $('#regresarEdificio').val()
    $.ajax({
      url: '../php/CRUDEdificios.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_edificio' : edificio,
      },
      success: function () {
        alert("Registro agregado")
      }
    })
  })

  $("#selectEdificio").change(function() {
    let id = $(this).children(":selected").attr("id")
    $.ajax({
      url: '../php/CRUDEdificios.php',
      type: 'GET',
      data: {
        'getInfo': true,
        'id_edificio': id,
      },
      success: function(response){
        const obj = JSON.parse(response)
        $("#regresarEdificio").val(obj['nombre_edificio'])
      }
    })

    $(document).on('click', '#modificar', function () {
      let name = $('#regresarEdificio').val()
      $.ajax({
        url: '../php/CRUDEdificios.php',
        type: 'POST',
        data: {
          'update': true,
          'id_edificio': id,
          'nombre_edificio': name,
        }
      })
    })
  })
  
})

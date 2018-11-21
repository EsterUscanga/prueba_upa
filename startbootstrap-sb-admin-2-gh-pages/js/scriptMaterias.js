$(document).ready(function () {
  $(document).on('click', '#agregar', function () {
    var name = $('#regresar').val();
    $.ajax({
      url: '../php/CRUDMaterias.php',
      type: 'POST',
      data: {
        'save': 1,
        'nombre_materia': name,
      },
      success: function (response) {
        $('#regresar').val('');
        $('#selectMateria').append(response);
        alert("Registro agregado")

      }
    });
  });

  $(document).on('click', '#borrar', function () {
    name = $('#regresar').val();
    $.ajax({
      url: '../php/CRUDMaterias.php',
      type: 'POST',
      data: {
        'delete': 1,
        'nombre_materia': name,
      },
      success: function () {
        alert("Registro eliminado")
      }
    });
  });
});

function showMateria() {
  const selectBox = document.getElementById("selectMateria")
  const selectedValue = selectBox.options[selectBox.selectedIndex].value
  document.getElementById("regresar").value = selectedValue
}

function cancel() {
  document.getElementById("regresar").value = " "          
}
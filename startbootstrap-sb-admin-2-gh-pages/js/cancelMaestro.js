function showMateria() {
  const selectBox = document.getElementById("selectMateria")
  const selectedValue = selectBox.options[selectBox.selectedIndex].value
  document.getElementById("regresar").value = selectedValue
}

function cancel() {
  document.getElementById("regresar").value = " "          
}
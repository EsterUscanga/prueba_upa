function show() {
  const selectBox = document.getElementById("select")
  const selectedValue = selectBox.options[selectBox.selectedIndex].value
  document.getElementById("regresar").value = selectedValue
}

function cancel() {
  document.getElementById("regresar").value = " "          
}
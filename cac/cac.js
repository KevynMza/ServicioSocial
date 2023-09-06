var agregarPersonaButton = document.getElementById("agregarPersona");


var agregarPersonaModal = document.getElementById("agregarPersonaModal");


agregarPersonaButton.addEventListener("click", function() {
  agregarPersonaModal.style.display = "block";
});


document.getElementById("cerrarAgregarPersona").addEventListener("click", function() {
  agregarPersonaModal.style.display = "none";
});


document.getElementsByClassName("close-button-agregar-persona")[0].addEventListener("click", function() {
  agregarPersonaModal.style.display = "none";
});


window.addEventListener("click", function(event) {
  if (event.target == agregarPersonaModal) {
    agregarPersonaModal.style.display = "none";
  }
});

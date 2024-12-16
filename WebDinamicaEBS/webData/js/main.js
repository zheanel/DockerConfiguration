jQuery(document).ready(function () {
  //Botones que muestran modales de bootstrap
  $("#i3-modal-btn").click(function () {
    $("#i3-modal").modal("show");
  });

  $("#cs-modal-btn").click(function () {
    $("#cs-modal").modal("show");
  });

  $("#ah-modal-btn").click(function () {
    $("#ah-modal").modal("show");
  });

  //Muestra modal de confirmacion, se cierra a los 5 segundos y limpia el formulario
  $("#enviarCorreo").click(function () {
    $("#send-modal").modal("show");
    setTimeout(function() {
      $('#send-modal').modal('hide');
      $('#contactoFormulario')[0].reset();
    }, 4000);
    
  });

//Oculto los elementos al acceder a la web

$("#proyectos").hide();
$("#contacto").hide();

//Muestro los elementos cuando presiono el link de la barra de navegación

$("#btn-proyectos").click(function () {
  $("#proyectos").toggle(500, function() {
      document.getElementById("proyectos").scrollIntoView();
  });
});

$("#btn-contacto").click(function () {
  $("#contacto").toggle(500, function() {
      document.getElementById("contacto").scrollIntoView();
  });
});

});

//Verifica datos del formulario
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contactoFormulario');
  const submitBtn = document.getElementById('enviarCorreo');

  const inputs = form.querySelectorAll('input[required], textarea[required]');

  function checkFormValidity() {
      let allValid = true;
      inputs.forEach(input => {
          if (!input.value || !input.checkValidity()) {
              allValid = false;
          }
      });
      submitBtn.disabled = !allValid;
  }

  inputs.forEach(input => {
      input.addEventListener('input', checkFormValidity);
  });
});
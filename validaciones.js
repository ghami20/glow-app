$(document).ready(() => {
  $("#iniciar-sesion-btn").click(validarSesionForm);
})

function validarSesionForm(e) {
  var emailFlag = 0;
  var passFlag = 0;
  if ($("#email").val() === "" || validateEmail() == false) {
    e.preventDefault();
    $("#emailError").html("* Ingrese mail válido");
    $("#emailError").css("display", "block");
  } else {
    $("#emailError").html("");
    $("#emailError").css("display", "none");
    emailFlag = 1;
  }
  if (validatePassword() == false) {
    e.preventDefault();
    $("#passError").html("* La contraseña debe tener al menos 6 caracteres");
    $("#passError").css("display", "block");
  } else {
    $("#passError").html("");
    $("#passError").css("display", "none");
    passFlag = 1;
  }

  if (emailFlag === 1 && passFlag === 1) {
    e.preventDefault();
    window.location.href = "views/panel-control/panel-control.php";
  }
}

function validateEmail() {
  const re = /\S+@\S+\.\S+/;
  return re.test(String($("#email").val()).toLowerCase());
}

function validatePassword() {
  if ($("#password").val().split('').length < 6) {
    return false;
  } else {
    return true;
  }
}
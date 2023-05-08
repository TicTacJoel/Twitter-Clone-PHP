let password = document.getElementById("password");
let cpassword = document.getElementById("cpassword");

function showPassword() {
  if (password.type === "password" || cpassword.type === "password") {
    password.type = "text";
    cpassword.type = "text";
  } else {
    password.type = "password";
    cpassword.type = "password";
  }
}

function showLoginPassword() {
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

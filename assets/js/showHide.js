//collect data by id
var password  = document.getElementById("password");
var toggler   = document.getElementById("togglePassword");

//set event listener
toggler.addEventListener("click", hideShowPassword);

//hideShowPassword main
function hideShowPassword() {
  
  //chech password type
  if (password.type == "password") {

    password.setAttribute("type", "text");
    toggler.classList.remove("bi-eye-slash-fill");
    toggler.classList.add("bi-eye-fill");

  } else {

    password.setAttribute("type", "password");
    toggler.classList.remove("bi-eye-fill");
    toggler.classList.add("bi-eye-slash-fill");
    
  }
}

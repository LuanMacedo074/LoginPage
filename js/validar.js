var c = 0;
$(document).ready(function(){
   $.getJSON("./db/usersdata.json", function(json) {
    user = {login: "", senha: ""}
    $( "#btn3").click(function(){
        if (document.getElementById("username").value && document.getElementById("password").value){
            user.login = document.getElementById("username").value.toLowerCase();
            counter = 0;
            json.forEach(data => {
                if (user.login == data.login) {
                counter = 1; } 
            });
            if (counter == 1) {
                $("#p").replaceWith("<section id='p'></section>");
                $("#p").append("O usuario já existe");
                c = 1; } 
            else {
                c = 0; }

        }
    })

});

});
function validarForm() {
    if (c == 0){
        return true;

    } else{
        return false
    }
 }

 function validarEmail() {
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var email = document.getElementById("email").value;
        var confirmaemail = document.getElementById("confirmemail").value;
        if (email.match(validRegex) && confirmaemail.match(validRegex) && email == confirmaemail) {
          return true;
      
        } else {
      
          return false;
      
        }
      
 }

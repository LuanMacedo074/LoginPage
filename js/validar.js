var c = 0;
$(document).ready(function(){
   // fetch("./db/usersdata.json")
   //       .then((res) => {
   //         return res.json();
   //       })
   //       .then((data) => console.log(data));
   $.getJSON("./db/usersdata.json", function(json) {
    user = {login: "", senha: ""}
    console.log(user);
    $( "#btn3").click(function(){
        if (document.getElementById("username").value && document.getElementById("password").value){
            user.login = document.getElementById("username").value.toLowerCase();
            console.log(user);
            counter = 0;
            json.forEach(data => {
                if (user.login == data.login) {
                counter = 1; }
                if (counter == 1) {
                    $("#p").replaceWith("<section id='p'></section>");
                    $("#p").append("O usuario já existe");
                    c = 1; } 
                else {
                    c = 0; }
            });
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
    //json.forEach(element => {
    //    console.log(element);  
    //});
 }

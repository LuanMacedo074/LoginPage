$(document).ready(function(){
    $( "#registro" ).hide(),
    $( "#esqueceu" ).click(function() {
        $( "#registro").show(),
        $( "#login").hide()
      })
      $( "#btn1" ).click(function() {
        var email = document.getElementById("email").value;
        var confirmaemail = document.getElementById("confirmemail").value;
        if (! email && ! confirmaemail){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append("Prencha os campos corretamente");
        } else if (! email){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "EMAIL"');
        } else if (! confirmaemail){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "CONFIRMAR EMAIL"');
        } else if (confirmaemail != email){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('OS EMAILS NÃO COINCIDEM');
        } else {
          window.location.replace("resetPassword.php");
        }
      });

  }); 
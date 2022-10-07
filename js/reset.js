$(document).ready(function(){
      $( "#btn2" ).click(function() {
        var senha = document.getElementById("senha").value;
        var confirmasenha = document.getElementById("confirmsenha").value;
        if (! senha && ! confirmasenha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append("Prencha os campos corretamente");
        } else if (! senha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "SENHA"');
        } else if (! confirmasenha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "CONFIRMAR SENHA"');
        } else if (confirmasenha != senha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('AS SENHAS NÃO COINCIDEM');
        } else {
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('SENHA RESETADA');;
        }
      });

  }); 
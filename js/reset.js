$(document).ready(function(){
      $( "#btn2" ).click(function() {
        var senha = document.getElementById("senha").value;
        var confirmasenha = document.getElementById("confirmsenha").value;
        if (! senha && ! confirmasenha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append("Prencha os campos corretamente");
        } else if (! senha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "senha"');
        } else if (! confirmasenha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('Prencha o campo "CONFIRMAR senha"');
        } else if (confirmasenha != senha){
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('OS senhaS NÃO COINCIDEM');
        } else {
          $("#p").replaceWith("<section id='p'></section>");
          $("#p").append('SENHA RESETADA');;
        }
      });

  }); 
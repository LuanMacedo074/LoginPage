<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validar.js"></script>
</head>
<body>
    <div id="loginform">
        <img id="loginico" src="imgs/loginicon.png"> <br>
        <form action="confirmaregistro.php" method="post" onsubmit="return validarForm();">
            <label class = "headertext">REGISTRO</label> <br>
                    <input class = "entrybox" type="text" id="username" name="username" placeholder="USUÁRIO" required> <br>
                    <input class = "entrybox" type="password" id="password" name="password" placeholder="SENHA" required> <br>
                    <button class = "submitbuttons" type="submit" id = "btn3">REGISTRO</button><br>
                    <button class = "submitbuttons" type="button " onclick="location.href='index.php'">VOLTAR</button><br>
                    <section id="p"></section>
        </form>
    </div>
    <div id="regbox">
        <section id="textregistro"><label >NÃO POSSUI CONTA ? </label> <label class="linkatual">CADASTRE-SE AQUI</label> 
    </div>
</body>
</html>
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
            <div id="login">
                <form action="validarlogin.php" method="post">
                <label class = "headertext">SIGN IN</label> <br>
                <input class = "entrybox" type="text" id="username" name="username" placeholder="USUÁRIO" required> <br>
                <input class = "entrybox" type="password" id="password" name="password" placeholder="SENHA" required> <br>
                <button class = "submitbuttons" type="submit">Sign In</button><br>
                <input type="checkbox" name="remember" id="checkbox"> 
                <label class="secondarylabel" for="remember"> CONTINUAR CONECTADO </label>
                <a class="secondarylabel" id="esqueceu">ESQUECEU SUA SENHA?</a>
            </div>
        </form>
        <div id="registro">
            <form action="resetPassword.php" onsubmit="return validarEmail();">
                <label class = "headertext" >RECOVERY PASSWORD</label> <br>
                <label class = "fieldtext" >INSIRA SEU EMAIL</label> <br>
                <input class = "entrybox" type="email" id="email" name="email" placeholder="exemplo@dominio.com" required> <br>
                <input class = "entrybox" type="email" id="confirmemail" name="confirmemail" placeholder="exemplo@dominio.com" required>
                <button class = "submitbuttons" type="submit" id='btn1'>ENVIAR</button>
                <section id="p"></section>
            </form>
        </div>
    </div>
    <div id="regbox">
        <section id="textregistro"><label>NÃO POSSUI CONTA ?</label> <a  class="reflink" href="registro.php">CADASTRE-SE AQUI</a></section>
    </div>
</body>
</html>
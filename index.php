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
</head>
<body>
    <div id="loginform">
            <img id="loginico" src="imgs/loginicon.png"> <br>
            <div id="login">
                <form action="validarlogin.php" method="post">
                <label>SIGN IN</label> <br>
                <div id="inputcamps">
                    <input type="text" id="username" name="username" required> <br>
                    <input type="password" id="password" name="password" required> <br>
                </div>
                <button type="submit">Sign In</button><br>
                <label>
                    <input type="checkbox" name="remember"> Continuar Conectado
                </label>
                <a id="esqueceu">ESQUECEU SUA SENHA?</a>
            </div>
        </form>
        <div id="registro">
            <form >
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" required> <br>
                <label for="confirmemail">CONFIRMAR EMAIL:</label>
                <input type="email" id="confirmemail" name="confirmemail" required>
                <button type="button" id='btn1'>ENVIAR</button>
                <section id="p"></section>
            </form>
        </div>
    </div>
    <div id="regbox">
        <section id="testeregistro"><label>NÃO POSSUI CONTA ?</label> <a href="registro.php">CADASTRE-SE AQUI</a></section>
    </div>
</body>
</html>
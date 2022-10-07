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
            <label>REGISTRO</label> <br>
                <div id="inputcamps">
                    <label for="username"> USUARIO</label>
                    <input type="text" id="username" name="username" required> <br>
                    <label for="password"> SENHA</label>
                    <input type="password" id="password" name="password" required> <br>
                    <button type="submit" id = "btn3">REGISTRO</button><br>
                    <section id="p"></section>
                </div>
        </form>
    </div>
    <div id="regbox">
        <section id="testeregistro"><label>NÃO POSSUI CONTA ?</label> <a href="registro.php">CADASTRE-SE AQUI</a></section>
    </div>
</body>
</html>
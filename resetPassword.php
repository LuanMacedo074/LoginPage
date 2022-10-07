<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/reset.js"></script>
</head>
<body>
    <div id="loginform">
        <form>
            <img id="loginico" src="imgs/loginicon.png"> <br>
            <div id="resetPass">
                <label class = "headertext">RECOVERY PASSWORD</label> <br>
                <label for="senha">SENHA:</label>
                <input class = "entrybox" type="password" id="senha" name="senha" required> <br>
                <label for="confirmsenha">CONFIRMAR SENHA :</label>
                <input class = "entrybox" type="password" id="confirmsenha" name="confirmsenha" required>
                <button id="submitbuttons" type="button" id='btn2'>ENVIAR</button>
                <section id="p"></section>
            </div>
        </form>
    </div>
    <div id="regbox">
    <section id="textregistro"><label>NÃO POSSUI CONTA ?</label> <a  class="reflink" href="registro.php">CADASTRE-SE AQUI</a></section>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="loginform">
        <img id="loginico" src="imgs/loginicon.png"> <br>
        <?php 
        $arraydef = json_decode(file_get_contents("db/usersdata.json"), TRUE);
        $profile = [
        ];
        $profile += ["login" => strtolower($_POST["username"])];
        $profile += ["senha" => $_POST["password"]];
        $c = 0;
        foreach($arraydef as $ar){
            if ($profile == $ar){
                $c += 1;
                if (! array_key_exists("remember", $_POST)){
                echo "<section id='logtext'>Parabéns, você está logado, porém será desconectado caso a sessão fique inativa.</section>";}else{
                echo "<section id='logtext'>Parabéns, você está logado e continuará conectado.</section>";
            }}};
        if ($c == 0){
          echo "<section id='logtext'>Usuário e senha não encontrados</section>";
        };
        ?>
        <button class = "submitbuttons" type="button " onclick="location.href='index.php'">VOLTAR</button><br>
        
    </div>
    <div id="regbox">
    <?php echo sprintf("<section id='textregistro'><label>CONECTADO COMO %s</label>", strtoupper($profile["login"])) ?>
    </div>
</body>
</html>
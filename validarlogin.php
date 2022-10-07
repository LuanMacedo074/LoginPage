<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
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
                echo "Parabéns, você está logado, porém será desconectado caso a sessão fique inativa.";}else{
                echo "Parabéns, você está logado e continuará conectado.";
            }}};
        if ($c == 0){
          echo "Usuário e senha não encontrados";
        };
        ?>
        
    </div>
    <div id="regbox">
        <section id="testeregistro"><label>NÃO POSSUI CONTA ?</label> <a href="registro.php">CADASTRE-SE AQUI</a></section>
    </div>
</body>
</html>
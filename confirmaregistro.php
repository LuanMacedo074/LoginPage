<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/confirm.js"></script>
</head>
<body>
    <?php 
        function appendArray($array, $app){
            array_push($array, $app);


            return $array;
        }


        function writeJson(&$arr, &$path){
            $jsonFile = json_encode($arr);
            file_put_contents($path, $jsonFile);
        }
        

        function readJson(&$path){
            $jsonFile = file_get_contents($path);
            if ($jsonFile){
                return json_decode($jsonFile, TRUE);
            }
        }

        function createArray(&$username, &$pass){
            $profile = [
            ];
            $profile += ["login" => $username];
            $profile += ["senha" => $pass];

            return $profile;
        }
        
        $caminhoArq = "db/usersdata.json";
        $dataAtual = readJson($caminhoArq);
        $user = createArray($_POST["username"], $_POST["password"]);
        $newData = appendArray($dataAtual, $user);
        writeJson($newData, $caminhoArq);
        header("location: index.php")
    ?>
</body>
</html>
<?php 
var_dump("lettura php");

$final_password = '';
$error_password = (!isset($_GET['psw_length'])) ? 'Inserisci il numero di caratteri che vuoi per la tua password, il numero deve essere compreso tra 8 e 32' : 'Inserisci un numero compreso tra 8 e 32';

if(isset($_GET['psw_length']) && ($_GET['psw_length'] >= 8 && $_GET['psw_length'] <= 32)){
    $psw_length= $_GET['psw_length'];
    var_dump($psw_length);
    var_dump("funzione non ancora partita");

    
    function gen_pass($psw_length){
        var_dump("funzione partita");
        $password = '';
        $all_types= [
            'abcdefghijklmnopqrstuvwxyz',
            '0123456789',
            '!?&%$<>^+-*/()[]{}@#_=',
        ];
        var_dump("======== INIZIO STAMPA PASSWORD ========");
        for ($i = 0; $i < $psw_length; $i++){
            $rand_i = rand(0, count($all_types) - 1);
            var_dump($rand_i);
    
            $rand_is = rand(0, strlen($all_types[$rand_i]) - 1);
    
            $password .= $all_types[$rand_i][$rand_is];

            var_dump($password);
        };

        return $password;
    }

    $final_password = gen_pass($psw_length);
}

$message = (isset($_GET['psw_length']) && ($_GET['psw_length'] >= 8 && $_GET['psw_length'] <= 32)) ? $final_password : $error_password;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="my_form">
            <form action="index.php" method="GET">
                <label for="psw">Inserisci la lunghezza della password</label>
                <input type="text" name="psw_length">
            </form>
        </div>
        <div class="output">
            <span><?php echo $message ?></span>
        </div>
    </div>
</body>
</html>
<?php 
var_dump("lettura php");

require __DIR__ .'/functions.php';

$final_password = '';
$error_password = (!isset($_GET['psw_length'])) ? 'Inserisci il numero di caratteri che vuoi per la tua password, il numero deve essere compreso tra 8 e 32' : 'Inserisci un numero compreso tra 8 e 32';

if(isset($_GET['psw_length']) && ($_GET['psw_length'] >= 8 && $_GET['psw_length'] <= 32)){
    $psw_length= $_GET['psw_length'];
    var_dump($psw_length);
    var_dump("funzione non ancora partita");

    session_start();

    // Richiamo funzione che genera la pass cosi da salvarla nella mia variabile
    $final_password = gen_pass($psw_length);

    $_SESSION['password'] = $final_password;
    header('Location: ./landing.php');
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
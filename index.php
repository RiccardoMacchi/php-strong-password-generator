<?php 
var_dump("lettura php");

if(isset($_GET['psw_length'])){
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

        
    }

    gen_pass($psw_length);
}

$message = (isset($_GET['psw_length'])) ? $password : 'Password non generata';


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
<?php

session_start();

$password_stamp = isset($_SESSION['password']) ? $_SESSION['password'] : 'Fatal error';; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo $password_stamp ?>
    </div>
</body>
</html>
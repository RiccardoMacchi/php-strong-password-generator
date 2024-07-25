<?php

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
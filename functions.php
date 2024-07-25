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

function gen_pass_pref($psw_length,$select_types,$single_pass){
    $password = '';
    $all_types= [
        'abcdefghijklmnopqrstuvwxyz',
        '0123456789',
        '!?&%$<>^+-*/()[]{}@#_=',
    ];
    if(!isset($select_types)){
        for ($i = 0; $i < $psw_length; $i++){
            $rand_i = rand(0, count($all_types) - 1);
            var_dump($rand_i);
    
            $rand_is = rand(0, strlen($all_types[$rand_i]) - 1);
    
            $password .= $all_types[$rand_i][$rand_is];
    
            var_dump($password);
        };
    } else {
        for ($i = 0; $i < $psw_length; $i++){
            var_dump($select_types);
            $rand_select = $select_types[0][rand(0, count($select_types[0]) - 1)];
            $rand_is = rand(0, strlen($all_types[$rand_select]) - 1);
            if($single_pass){
                var_dump(str_contains($password,$all_types[$rand_select][$rand_is]));
                if(!str_contains($password,$all_types[$rand_select][$rand_is])){
                    $password .= $all_types[$rand_select][$rand_is];
                } else {
                    $i--;
                    if($psw_length >= strlen($all_types[$select_types[0][0]])){
                        $psw_length = strlen($all_types[$select_types[0][0]]);
                    };
                }
            }else{
                $password .= $all_types[$rand_select][$rand_is];
            }
            
    
            var_dump($password);
        };
        return $password;
    }
   
}
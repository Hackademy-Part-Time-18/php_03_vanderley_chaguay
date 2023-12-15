<?php
$firstRule = false;
$secondRule = false;
$thirdRule = false;
$fourthRule = false;

//take the password from user
$password = readLine("inserisci la password :");
if(strlen($password) >=8 ){
    $firstRule = true;
}
for($i = 0;$i < strlen($password);$i++){
    if(is_numeric($password)){
        $secondRule = true;
        break;
    }
}
var_dump($secondRule);
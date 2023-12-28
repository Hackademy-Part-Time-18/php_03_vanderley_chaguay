<?php
$firstRule = false;
$secondRule = false;
$thirdRule = false;
$fourthRule = false;

//take the password from user
$password = readLine("inserisci la password :");
//find out first rule
if(strlen($password) >=8 ){
    $firstRule = true;
}
//find out second rule
for($i = 0;$i < strlen($password);$i++){
    if(is_numeric($password[$i])){
        $secondRule = true;
    break;
    }
}
//find out third rule
for ($i=0; $i < strlen($password) ; $i++) { 
    if(ctype_upper($password[$i])){
        $thirdRule = true;
        break;
    };
}
//find out fourth rule
for ($i=0; $i <  strlen($password); $i++) { 
    if(preg_match('/[^a-zA-Z0-9]/', $password)){
    $fourthRule = true;
    break;
    }
}
if ($firstRule == true && $secondRule == true && $thirdRule == true && $fourthRule == true) {
    echo "password valida";
}else{
    echo "password non valida";
}
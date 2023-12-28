<?php
function checkRule($password){
    $firstRule = false;
    $secondRule = false;
    $thirdRule = false;
    $fourthRule = false;
        //check first rule
        if(strlen($password)>8){
            $firstRule = true;
        }


        //check second rule
        for ($i=0; $i < strlen($password); $i++) { 
        if(is_numeric($password[$i])){
            $secondRule = true;

        }
        }
        //check third rule
        for ($i=0; $i < strlen($password) ; $i++) { 
            if (ctype_upper($password[$i])) {
                $thirdRule = true;
            }
        }

        //check fourth rule
        for ($i=0; $i < strlen($password) ; $i++) { 
            if (preg_match('/[^a-zA-Z0-9]/', $password)) {
                $fourthRule = true;
            }
        }

        if ($firstRule == true && $secondRule == true && $thirdRule == true && $fourthRule == true){
            return true;
        }else{
            echo "non valida";
        }
    }
    
for ($j=0; $j < 3; $j++) { 
    $password = readline("inserisci la paswword\n");
    if (checkRule($password)==true) {
        echo"valida";
        break;
    }
}

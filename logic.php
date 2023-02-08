<?php 
    function genPass($character_number){
        $characters="abcdefghijklmnopqrstuvwxyz123456789!?&%$<>^+-*/()[]{}@#_='";
        $password="";

        while(strlen($password) < $character_number){
            $randomPass=$characters[rand(0, strlen($characters)-1)];
            $password .= $randomPass;
        };
        return $password;

    };

    // CONTROLLO DA EFFETTUARE SULLA VALIDITà DELLA PASSWORD
    if(isset($_GET["generatedPassword"]) && $_GET["generatedPassword"] < 5 || $_GET["generatedPassword"] > 32 ){
        $error="Non hai inserito un valore valido, necessari tra gli 5 e i 32 caratteri.";
    } 
    elseif(isset($_GET["generatedPassword"]) && $_GET["generatedPassword"] !== ""){
        $password = genPass($_GET["generatedPassword"]);
    };



?>
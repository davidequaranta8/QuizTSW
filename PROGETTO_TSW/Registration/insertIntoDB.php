<?php

    if(isset($_POST['nome'])){
        $db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());

        $query = "INSERT INTO tableuser VALUES ($1,$2,$3,$4,$5)";

        $stmtname = "insert";

        $prep = pg_prepare($db,$stmtname,$query);

        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $result = pg_execute($db, $stmtname, array($_POST['nome'],$_POST['cognome'],$_POST['username'],$_POST['email'],$password));
        // controllo per utente già registrato (PHP)

        // controllo per password e Re-Password uguali (lato JAVASCRIPT)
        
        // controllo se sono stati compilati i TextField 

        //controllo in login per la password con password_verify (così indichiamo password inserita corretta o sbagliata )
    }
?>
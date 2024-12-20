<?php

    if(isset($_POST['nome'])){ //mettere anche gli altri
        $db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());

        
        if(controlloMail($_POST['email'],$db)){ //se la mail è già presente non inserisco 

            echo "<script>
                var err = document.getElementById(\"emailError\");
                err.innerText = \"Sembra che tu ti sia già registrato. Accedi al tuo account per continuare.\";
                err.style.visibility = 'visible';
            </script>";
            echo "ciao";
        }else{ //altrimenti inserisco
        $query = "INSERT INTO tableuser VALUES ($1,$2,$3,$4,$5)";

        $stmtname = "insert";

        $prep = pg_prepare($db,$stmtname,$query);

        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $result = pg_execute($db, $stmtname, array($_POST['nome'],$_POST['cognome'],$_POST['username'],$_POST['email'],$password));

        }
        // controllo per utente già registrato (PHP)

        // controllo per password e Re-Password uguali (lato JAVASCRIPT)
        
        // controllo se sono stati compilati i TextField 

        //controllo in login per la password con password_verify (così indichiamo password inserita corretta o sbagliata )
    }

    function controlloMail($email,$db){
        $sql = "SELECT email FROM tableuser WHERE email = $1";
        
        $stmtname = "checkMail";

        // Preparazione della query
        $prep = pg_prepare($db, $stmtname, $sql);
        if (!$prep) {
            die('Errore nella preparazione della query: ' . pg_last_error());
        }

        // Esecuzione della query
        $vet = array($email);
        $result = pg_execute($db, $stmtname, $vet);
        
        //ricerco nella query
        $row = pg_fetch_assoc($result);

        if($row != false){
            return true;
        }
        return false;
    }
?>
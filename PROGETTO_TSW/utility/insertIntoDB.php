<?php

    if(isset($_POST['nome'])){ //mettere anche gli altri
        $db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());

        
        if(controlloMail($_POST['emailReg'],$db)){ //se la mail è già presente non inserisco 

            echo "<script>
                var err = document.getElementById(\"emailRegError\");
                err.innerText = \"Sembra che tu ti sia già registrato. Accedi al tuo account per continuare.\";
                err.style.visibility = 'visible';
                var x = document.getElementById(\"registrazione\");
                var y = document.getElementById(\"login\");
                y.style.display = \"none\";
                x.style.display = \"block\";
            </script>"; //se risulta già registrato viene mostrato il msg di errore e inoltre viene rimostrata la pagina di registrazione (questo perchè php ricarica la pagina corrente e ricaricandola mostra la pagina di Login che è quella di default)
            
        }else{ //altrimenti inserisco
        $query = "INSERT INTO tableuser VALUES ($1,$2,$3,$4,$5)";

        $stmtname = "insert";

        $prep = pg_prepare($db,$stmtname,$query);

        $password = password_hash($_POST['passwordReg'],PASSWORD_DEFAULT);
        $result = pg_execute($db, $stmtname, array($_POST['nome'],$_POST['cognome'],$_POST['username'],$_POST['emailReg'],$password));

        }
        
    }

    function controlloMail($email,$db){ //controllo che l'email non sia già presente nel DB
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
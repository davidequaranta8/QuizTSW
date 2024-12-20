<?php
    if(isset($_POST['email']) && ($_POST['email']!="" && $_POST['password']!="")){ //controllo che sia stato cliccato il bottone di invio del form e che siano valorizzati i TextField

        $db = pg_connect($connection_string) or die('impossibile connettersi al database: ' . pg_last_error());

        $email = $_POST['email'];

        $sql = "SELECT email,password FROM tableuser WHERE email = $1";
        
        $stmtname = "checkLogin";

        // Preparazione della query
        $prep = pg_prepare($db, $stmtname, $sql);
        if (!$prep) {
            die('Errore nella preparazione della query: ' . pg_last_error());
        }

        // Esecuzione della query
        $vet = array($email);
        $result = pg_execute($db, $stmtname, $vet);
        
        //ricerco nella query
        $row = pg_fetch_assoc($result); //non faccio più iterazioni perchè email è chiave primaria quindi non possono esistere più email uguali

        if(!$row){ //se la mail non viene trovata mostra il messaggio
            //utente non presente
            echo "<script type=\"text/javascript\"> 
                    var err = document.getElementById(\"passwordError\");
                    err.innerText = \"Email e/o password non valide! Riprova.\";
                    err.style.visibility = 'visible';
                </script>";
        }else{
            //utente trovato
            echo "email trovata";
            $passTab = $row['password'];
            $passIns = $_POST['password'];
            if(password_verify($passIns,$passTab)){ //controllo che la password inserita nel Form corrisponda a quella nella TABLE
                echo "pass corretta";
                //in questo caso poi passiamo alla pagina personale dell'utente.
                //oppure possiamo tornare alla pagina da cui siamo stati rediretti in tale pagina
                
            }else{ //se la password è sbagliata mostra il messaggio
                echo "<script type=\"text/javascript\">  
                    var err = document.getElementById(\"passwordError\");
                    err.innerText = \"Email e/o password non valide! Riprova.\";
                    err.style.visibility = 'visible';
                </script>";
                
            }
        }

        //chiudo la connessione
        pg_close($db);
    }
    ?>
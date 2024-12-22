<?php
session_start();
    //in isset faccio il controllo solo della mail e non anche quello della password perchè tramite JS abbiamo imposto che debbano essere popolati per forza entrambi

    if(isset($_POST['emailLog']) ){ //controllo che sia stato cliccato il bottone di invio del form e che siano valorizzati i TextField

        $db = pg_connect($connection_string) or die('impossibile connettersi al database: ' . pg_last_error());

        $email = $_POST['emailLog'];

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
                    var err = document.getElementById(\"passwordLogError\");
                    err.innerText = \"Email e/o password non valide! Riprova.\";
                    err.style.visibility = 'visible';
                </script>";
        }else{
            //utente trovato
           
            $passTab = $row['password']; //password presente nella tabella
            $passIns = $_POST['passwordLog']; //password ricavata dal FORM
            if(password_verify($passIns,$passTab)){ //controllo che la password inserita nel Form corrisponda a quella nella TABLE
                
                if(isset($_SESSION['current_page'])){ /* ho salvato nella V. di Sessione "current_page" la pagina da cui proveniamo per effettuare il login in modo tale che una volta effettuato il login torniamo a tale pagina */
                    $_SESSION['viewPage'] = "logged";
                    $x = $_SESSION['current_page'];
                    header("location: $x");
                }else{
                    //se non esiste una pagina da cui proveniamo andiamo nell'area personale
                    //header("location: "); metti link pagina personale
                }
            }else{ //se la password è sbagliata mostra il messaggio
                echo "<script type=\"text/javascript\">  
                    var err = document.getElementById(\"passwordLogError\");
                    err.innerText = \"Email e/o password non valide! Riprova.\";
                    err.style.visibility = 'visible';
                </script>";
                
            }
        }

        //chiudo la connessione
        pg_close($db);
    }
    ?>
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/db.php';
    session_start();

    if(isset($_SESSION['emailUserLogged'])){
        $score = $_POST['scoreForm'];
        $nameQuiz = $_POST['nameQuiz'];
        
        $db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());

        if(verify($nameQuiz,$_SESSION['emailUserLogged'],$db)){ // aggiungo solo se non è stato già fatto il quiz

            $query = "INSERT INTO tablechronology VALUES ($1,$2,$3)";

            $stmtname = "insertScoreQuiz";

            $prep = pg_prepare($db,$stmtname,$query);

            $result = pg_execute($db, $stmtname, array($nameQuiz,$_SESSION['emailUserLogged'],$score));
        
        }else{ // modifico il punteggio del quiz già presente nella TABLE
            
            $query = "UPDATE tablechronology SET punteggio = $3 WHERE id_quiz = $1 AND email = $2";

            $stmtname = "updateScoreQuiz";

            $prep = pg_prepare($db, $stmtname, $query);
            echo $nameQuiz . " " . $_SESSION['emailUserLogged'] . " " . $score;
            $result = pg_execute($db, $stmtname, array($nameQuiz, $_SESSION['emailUserLogged'], $score));

        }
        pg_close($db);
        $x = $_SESSION['current_page'];
        header("location: $x");//decidere dove tornare
        }
    
    /* qui dentro facciamo il controllo che se è già presente modifichiamo solo il punteggio */
    function verify($nameQuiz,$email,$db){ //controllo che l'utente non abbia già fatto il quiz nel DB
        $sql = "SELECT * FROM tablechronology WHERE id_quiz = $1 AND email = $2";
        
        $stmtname = "checkQuiz";

        // Preparazione della query
        $prep = pg_prepare($db, $stmtname, $sql);
        if (!$prep) {
            die('Errore nella preparazione della query: ' . pg_last_error());
        }

        // Esecuzione della query
        $vet = array($nameQuiz,$email);
        $result = pg_execute($db, $stmtname, $vet);
        
        //ricerco nella query
        $row = pg_fetch_assoc($result);

        if($row != false){
            
            return false;
        }
        
        return true;
    }
?>
<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 
    $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());

    $sql = "SELECT id_quiz FROM tablechronology WHERE punteggio = $1 AND email = $2";

    $stmtname = "searchQuiz";/*identificativo della query*/

    // Preparazione della query
    $prep = pg_prepare($db, $stmtname, $sql);
    if (!$prep) {
        die('Errore nella preparazione della query: ' . pg_last_error());
    }

    $vet = array("5",$_SESSION['emailUserLogged']);

    $result = pg_execute($db, $stmtname, $vet);   
    if (!$result) {
        echo "Errore nella query: " . pg_last_error($db);
    } else {
        // Recupera i risultati
        /*preleva solo l'id dei quiz in cui hai totalizzato 5 pt*/
        while($row = pg_fetch_assoc($result)){
            $idParts = explode('-', $row['id_quiz']);
            $category = $idParts[0];
            $subCategory = $idParts[1];
                echo "<a href=\"/PROGETTO_TSW/quiz/quiz?id=" . $row['id_quiz'] . "\" onclick=\"verifyLogin(event)\">
                      <img src=\"/PROGETTO_TSW/utility/icone/" . $category . "/" . $row['id_quiz'] . ".png\" 
                        id=\"bestQuiz\"
                        title=\"" . $subCategory . "\" 
                         alt=\"" . $row['id_quiz'] . "\" 
                         width=\"419px\" height=\"419px\">
                      </a>";    
         }
    }

    pg_close($db);
?>
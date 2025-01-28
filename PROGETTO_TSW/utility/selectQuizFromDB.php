<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 
    $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());

    $sql = "SELECT id_quiz FROM tablequiz WHERE id_domanda = $1";

    $stmtname = "searchQuiz";/*identificativo della query*/

    // Preparazione della query
    $prep = pg_prepare($db, $stmtname, $sql);
    if (!$prep) {
        die('Errore nella preparazione della query: ' . pg_last_error());
    }

    $vet = array("1");

    $result = pg_execute($db, $stmtname, $vet);   
    if (!$result) {
        echo "Errore nella query: " . pg_last_error($db);
    } else {
        // Recupera i risultati
        $i=0;
        while($row = pg_fetch_assoc($result)){
            $idParts = explode('-', $row['id_quiz']);
            $category = $idParts[0];
            $subCategory = $idParts[1];
            $class = "visible";
            if($category == $_SESSION['category']){
                $i++;
                if($i>5){
                    $class="hidden";
                }
                echo "<a href=\"/PROGETTO_TSW/quiz/quiz?id=" . $row['id_quiz'] . "\" onclick=\"verifyLogin(event)\">
                      <img src=\"/PROGETTO_TSW/utility/icone/" . $category . "/" . $row['id_quiz'] . ".png\" 
                        title=\"" . $subCategory . "\" 
                         alt=\"" . $row['id_quiz'] . "\" 
                         class=\"" . $class . "\" width=\"419px\" height=\"419px\">
                      </a>";//setto la classe dinamicamente, per le prime 5 immagini seleziono visible, le altre saranno hidden

            }      
         }
    }

    pg_close($db);
?>
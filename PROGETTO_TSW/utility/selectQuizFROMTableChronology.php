<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 

$db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());

$sql = "SELECT id_quiz FROM tablechronology WHERE email = $1";

$stmtname = "searchQuiz";/*identificativo della query*/

// Preparazione della query
$prep = pg_prepare($db, $stmtname, $sql);
if (!$prep) {
    die('Errore nella preparazione della query: ' . pg_last_error());
}

$vet = array($_SESSION['emailUserLogged']);

$result = pg_execute($db, $stmtname, $vet);   
if (!$result) {
    echo "Errore nella query: " . pg_last_error($db);
} else {
    // Recupera i risultati
    $flag=0; //la uso per vedere se ho eseguito almeno una volta il while oppure no perchè nel caso in cui non l'ho eseguito allora stampo il msg sotto
    while($row = pg_fetch_assoc($result)){
        $idParts = explode('-', $row['id_quiz']);
        $category = $idParts[0];
        $subCategory = $idParts[1];
            
            echo "<a href=\"/PROGETTO_TSW/catalogo/CatalogoPHP.php\"><img src=\"/PROGETTO_TSW/utility/icone/" . $category . "/" . $row['id_quiz'] . ".png\" 
                title=\"" . $subCategory . "\" 
                alt=\"" . $row['id_quiz'] . "\" 
                width=\"419px\" height=\"419px\" display=\"inline\" id=\"imgQuiz\"></a> ";
        
        $flag=1;
    }
    if( $flag == 0 ){
        echo "<div id=\"quizAbsent\">Non è stato effettuato alcun quiz</div>";
        
    }
}

pg_close($db);
?>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 

$db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());

$sql = "SELECT punteggio FROM tablechronology WHERE email = $1";

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
    $flag = 0;
    $sum = 0;
    while($row = pg_fetch_assoc($result)){
        $sum = $sum + $row['punteggio'];
        
        $flag=1;
    }
    if( $flag == 0 ){
        echo "Il tuo Punteggio totale: 0 punti";
    }else {
        echo "Il tuo Punteggio totale: ". $sum ." punti";
    }
}

pg_close($db);
?>
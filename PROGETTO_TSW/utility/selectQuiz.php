<?php
    include_once ($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php");

    $db = pg_connect($connection_string) or die('impossibile connettersi al database: ' . pg_last_error());
    header('Content-Type: application/json');
    $idquiz = $_POST['id_quiz'];
    $sql = "SELECT * FROM tablequiz WHERE id_quiz = $1";
    
    $stmtname = "searchQuiz";

    // Preparazione della query
    $prep = pg_prepare($db, $stmtname, $sql);
    if (!$prep){
        die('Errore nella preparazione della query: ' . pg_last_error());
    }

    // Esecuzione della query
    $vet = array($idquiz);
    $result = pg_execute($db, $stmtname, $vet);

    //ricerco nella query
    $vet = array();
    
    while ($row = pg_fetch_assoc($result)){
        $i = (int)$row['id_domanda']; //us id_domanda (presente nel DB) per ordinarli nel vettore che restituisco dalla chiamata.
        $vet[$i-1] = $row; //decremento $i perchè i quiz sono ordinati da 1 a 5
        
    }

    
    //chiudo la connessione
    
    pg_close($db);
    echo json_encode($vet);  
?>
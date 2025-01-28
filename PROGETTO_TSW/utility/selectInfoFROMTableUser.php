<?php
    include_once ($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php");

    $db = pg_connect($connection_string) or die('impossibile connettersi al database: ' . pg_last_error());
    header('Content-Type: application/json');

    $email = $_POST['email'];
    $sql = "SELECT * FROM tableuser WHERE email = $1";
    
    $stmtname = "searchInfoUser";

    // Preparazione della query
    $prep = pg_prepare($db, $stmtname, $sql);
    if (!$prep){
        die('Errore nella preparazione della query: ' . pg_last_error());
    }

    // Esecuzione della query
    $vet = array($email);
    $result = pg_execute($db, $stmtname, $vet);

    //ricerco nella query
    
    $row = pg_fetch_assoc($result); 
// è inutile fare il controllo se è uguale a NULL perchè tanto a questa pagina accediamo 
// tramite l'area personale che ovviamente sta ad indicare che l'utente è già LOGGATO
    if($row['avatar'] == null){
        $vet = array($row['nome'],$row['cognome'],$row['username'],"/PROGETTO_TSW/utility/icone/avatar/icona.png");
    }else{
        $vet = array($row['nome'],$row['cognome'],$row['username'],$row['avatar']);
    }
    //chiudo la connessione
    pg_close($db);
    echo json_encode($vet);
?>
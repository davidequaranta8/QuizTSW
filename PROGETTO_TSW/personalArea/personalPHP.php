<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Area personale</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<!--fogli di stile-->
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/headerStyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/personalArea/personalStyle.css">
    <script type="text/javascript" src="/PROGETTO_TSW/personalArea/personalArea.js"></script>
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">
</head>
<body onload="setLoggedPage()">

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/headerPHP.php"); ?></br>
    <?php 
        session_start(); 
        if($_SESSION['loginFlag']){ // controllo per vedere se sei loggato oppure no 
    ?>
    <div id="grid_container">
        <div id="info">
            <img src="/PROGETTO_TSW/utility/icone/iconaUtente.png" id="avatarUtente" alt="ICONA UTENTE" width="350px" heigth="350px" > <!-- /PROGETTO_TSW/iconaX.png -->
            <p id="datiPersonali">Dati Personali:</p>
            <div id="listaCampi">
                <p id="name">Nome:</p>
                <p id="surname">Cognome:</p>
                <p id="email">E-mail: <em><?php echo $_SESSION['emailUserLogged']?></em></p>
                <p id="username">Username: </p>
            </div>
            <a href="">Per cambiare la password clicca qui.</a>
        </div>
        <div id="separator"></div>
        <div id="quiz">
            <h1 id="title">I miei quiz</h1>
            <?php //seleziono i quiz effettuati dall'utente dalla table_chronology
            
            include_once ($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFROMTableChronology.php"); 
            ?>
            <h2 id="totalScore"><?php //ottengo il punteggio totale dell'utente da table_chronology
            include_once ($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectScoreFROMTableChronology.php"); ?>
            </h2>
        </div>  
    
    </div>
    <script>takeInfo();</script>
    <?php
    }else{ 
        header("location: /PROGETTO_TSW/homepage/homePHP.php"); //viene eseguito se non sono loggato 
    }
        ?>
</body>
</html>
<!-- cliccare sulle immagine e andare nel catalogo -->
<!-- prelevare e sommare il punteggio da selectTbleChronology per mostrarlo nella pagina -->
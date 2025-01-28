<?php 
      include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 
      session_start();
      $_SESSION['current_page'] = $_SERVER['PHP_SELF'];
  
      $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/headerStyle.css">
    <link rel="stylesheet" href="/PROGETTO_TSW/Catalogo/CatalogoCSS.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/footerStyle.css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">

</head>
<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/headerPHP.php"); ?> 
    

  <!-- PHP -->   
<?php
    $_SESSION['category'] = "PHP";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>

    <br><h2>PHP</h2>
   <div class="php">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Concetti di base.png" alt="Concetti di Base">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Funzioni.png" alt="Funzioni">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Strutture di controllo.png" alt="Strutture di Controllo">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Gestione delle stringhe.png" alt="Gestione delle Stringhe">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Manipolazione di array.png" alt="Array e Manipolazione di Array">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Gestione errori ed eccezioni.png" alt="Gestione degli Errori ed Eccezioni">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Sessione e cookie.png" alt="Sessione e Cookie">
    <img src="/PROGETTO_TSW/utility/PHP/PHP-Interazione con database.png" alt="Interazione con Database">
  </div>


  <!-- HTML -->
<?php
    $_SESSION['category'] = "HTML";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>
 
  <br><h2>HTML</h2>
  <div class="html">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Concetti di base.png" alt="Concetti di Base">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Formattazione del testo.png" alt="Formattazione del Testo">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Liste e tabelle.png" alt="Liste e Tabelle">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Link e anchor.png" alt="Link e Anchor">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Immagini e multimedia.png" alt="Immagini e Multimedia">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Form e input.png" alt="Form e Input">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-HTML Semantico.png" alt="HTML Semantico">
    <img src="/PROGETTO_TSW/utility/HTML/HTML-Attributi globali.png" alt="Attributi Globali">
  </div>
  
  <!-- CSS -->
<?php
    $_SESSION['category'] = "CSS";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>
  
  <br><h2>CSS</h2>
  <div class="css">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Selettori.png" alt="Selettori CSS">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Box model.png" alt="Box Model">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Proprieta layout.png" alt="Proprietà di Layout">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Colori e sfondi.png" alt="Colori e Sfondi">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Tipografia.png" alt="Tipografia">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Animazioni e transazioni.png" alt="Animazioni e Transazioni">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Posizionamento e display.png" alt="Posizionamento e Display">
    <img src="/PROGETTO_TSW/utility/CSS/CSS-Proprieta avanzate.png" alt="Proprietà Avanzate di CSS">
  </div>
  
  <!-- JavaScript -->
<?php
    $_SESSION['category'] = "JavaScript";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>
 
<br><h2>JavaScript</h2>
<div class="javascript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Array e oggetti.png" alt="Array e Oggetti in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Asincronicità.png" alt="Asincronicità in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Concetti di base.png" alt="Concetti di Base in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Debugging.png" alt="Debugging in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Dom manipulation.png" alt="Manipolazione del DOM in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Framework e librerie.png" alt="Framework e Librerie JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Funzioni e scope.png" alt="Funzioni e Scope in JavaScript">
    <img src="/PROGETTO_TSW/utility/JavaScript/JS-Moduli e gestione delle dipendenze.png" alt="Moduli e Gestione delle Dipendenze in JavaScript">
</div>

<!-- Java -->
<?php
    $_SESSION['category'] = "JAVA";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>

<br><h2>Java</h2>
<div class="java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Collezioni e framework.png" alt="Collezioni e Framework in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Comandi di base.png" alt="Comandi di Base in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Gestione delle eccezioni.png" alt="Gestione delle Eccezioni in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Input output.png" alt="Input e Output in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-oop.png" alt="Programmazione Orientata agli Oggetti in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Strutture di controllo.png" alt="Strutture di Controllo in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Testing e debugging.png" alt="Testing e Debugging in Java">
    <img src="/PROGETTO_TSW/utility/Java/JAVA-Thread.png" alt="Thread in Java">
</div>


<!-- C -->
<?php
    $_SESSION['category'] = "C";
    include($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/selectQuizFromDB.php");
?>

<br><h2>C</h2>
<div class="c">
    <img src="/PROGETTO_TSW/utility/C/C-Array e stringhe.png" alt="Array e Stringhe in C">
    <img src="/PROGETTO_TSW/utility/C/C-Concetti di base.png" alt="Concetti di Base in C">
    <img src="/PROGETTO_TSW/utility/C/C-Controllo del flusso.png" alt="Controllo del Flusso in C">
    <img src="/PROGETTO_TSW/utility/C/C-File io.png" alt="Gestione dei File in C">
    <img src="/PROGETTO_TSW/utility/C/C-Funzioni.png" alt="Funzioni in C">
    <img src="/PROGETTO_TSW/utility/C/C-Gestione della memoria.png" alt="Gestione della Memoria in C">
    <img src="/PROGETTO_TSW/utility/C/C-Puntatori.png" alt="Puntatori in C">
    <img src="/PROGETTO_TSW/utility/C/C-Strutture e unioni.png" alt="Strutture e Unioni in C">
</div>


  <br><br>
  
    <!-- collego lo script associato per gestire la visualizzazione della pagina per un utente loggato-->
    <script type="text/javascript" src="/PROGETTO_TSW/catalogo/catalogoScript.js"></script>
    <?php
    if(isset($_SESSION['viewPage'])){
        echo "<script> setLoggedPage(); </script>"; 
        session_destroy();
      }
    ?>

    <!-- footer -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/footerPHP.php")?>

</body>
</html>
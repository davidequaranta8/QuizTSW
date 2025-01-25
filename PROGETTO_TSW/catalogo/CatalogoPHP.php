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

    <h2>Java</h2> <br>

    <img class="java" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="java" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="java" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="java" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">

    <h2>HTML</h2> <br>

    <img class="html" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="html" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">

    <h2>C</h2> <br>

    <img class="c" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="c" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="c" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="c" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">

    <h2>JavaScript</h2> <br>

    <img class="javascript" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="javascript" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    
    <h2>PHP</h2> <br>

    <img class="php" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="php" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="php" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="php" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">

    <h2>CSS</h2> <br>

    <img class="css" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="css" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="css" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    <img class="css" src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg">
    


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

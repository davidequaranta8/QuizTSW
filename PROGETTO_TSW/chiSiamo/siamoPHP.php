<?php /*
      include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 
      session_start();
      $_SESSION['current_page'] = $_SERVER['PHP_SELF'];

      $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Siamo</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/headerStyle.css">
    <link rel="stylesheet" href="/PROGETTO_TSW/chiSiamo/siamoCSS.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/footerStyle.css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">

</head>
<body>
    

<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/headerPHP.php"); ?> 


    <br><br>

    <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" id="siamo">
    
 
    <div style="text-align: center">
        <p><h3> “Se ni’ mondo esistesse un po’ di bene<br>
            e ognun si honsiderasse suo fratello<br>
            ci sarebbe meno pensieri e meno pene<br>
            e il mondo ne sarebbe assai più bello”
                                                       </h3></p>
    </div>
    
   
    <!-- footer -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/footerPHP.php")?>

</body>
</html>

<?php
      include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/db.php"); 
      session_start();
      $_SESSION['current_page'] = $_SERVER['PHP_SELF'];

      $db = pg_connect($connection_string) or die('Impossibile connettersi al database: ' . preg_last_error());
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/headerStyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/homepage/homeStyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/footerStyle.css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">
</head>
<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/headerPHP.php"); ?></br>

    <div id="recenti" class="fade slideshow">
          <div class="title"><h2>Svolti di recente<h2></div><!-- visualizzata solo se l'utente è loggato-->

          <div class="images">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" class="visible" width="250px" heigth="150px">
          </div>

     </div>

        <div id="slideshow1" class="fade slideshow">
          <div class="title"><h2>Categoria 1<h2></div>

          <div class="images">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 1-CATEGORIA 1" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 2-CATEGORIA 1" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 3-CATEGORIA 1" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 4-CATEGORIA 1" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 5-CATEGORIA 1" class="visible" width="250px" heigth="150px">
            <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 6-CATEGORIA 1" class="hidden" width="1024px" heigth="1024px">
            <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 7-CATEGORIA 1" class="hidden" width="1024px" heigth="1024px">
            <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 8-CATEGORIA 1" class="hidden" width="1024px" heigth="1024px">

            <a class="next" onclick="plusSlides('.block-container1','#slideshow1',1)">&#10097</a><!--pulsante per andare avanti-->
               
          </div>
          
          <div class="block-container1"><!-- barra che traccia lo scorrimento-->
            <span class="block" onclick="showSlides('.block-container1','#slideshow1',2)"></span>
            <span class="block" onclick="showSlides('.block-container1','#slideshow1',1)"></span>
          </div>
          

        </div>
      
        
        <div id="slideshow2" class="fade slideshow">
          <div class="title"><h2>Categoria 2<h2></div>

          <div class="images">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 1-CATEGORIA 2" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 2-CATEGORIA 2" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 3-CATEGORIA 2" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 4-CATEGORIA 2" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 5-CATEGORIA 2" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 6-CATEGORIA 2" class="hidden" width="1024px" heigth="1024px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 7-CATEGORIA 2" class="hidden" width="1024px" heigth="1024px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 8-CATEGORIA 2" class="hidden" width="1024px" heigth="1024px">
          
          <a class="next" onclick="plusSlides('.block-container2','#slideshow2',1)">&#10097</a> 
          </div>  

          <div class="block-container2">
            <span class="block" onclick="showSlides('.block-container2','#slideshow2',2)"></span>
            <span class="block" onclick="showSlides('.block-container2','#slideshow2',1)"></span>
          </div>

        </div>

        <div id="slideshow3" class="fade slideshow">
          <div class="title"><h2>Categoria 3<h2></div>

          <div class="images">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 1-CATEGORIA 3" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 2-CATEGORIA 3" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 3-CATEGORIA 3" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 4-CATEGORIA 3" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/phpCopertinaWide.jpg" alt="QUIZ 5-CATEGORIA 3" class="visible" width="250px" heigth="150px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 6-CATEGORIA 3" class="hidden" width="1024px" heigth="1024px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 7-CATEGORIA 3" class="hidden" width="1024px" heigth="1024px">
          <img src="/PROGETTO_TSW/utility/icone/html.webp" alt="QUIZ 8-CATEGORIA 3" class="hidden" width="1024px" heigth="1024px">
          
          <a class="next" onclick="plusSlides('.block-container3','#slideshow3',1)">&#10097</a> 
          </div>
          
          <div class="block-container3">
            <span class="block" onclick="showSlides('.block-container3','#slideshow3',2)"></span>
            <span class="block" onclick="showSlides('.block-container3','#slideshow3',1)"></span>
          </div>

        </div>

        <script type="text/javascript" src="homeScript.js"></script><!-- valuta se metterlo prima o dopo-->

        <?php
  
      
      if(isset($_SESSION['viewPage'])){
        echo "<script>
        
        function setLoggedPage(){
          var login = document.getElementById(\"loginStr\");
          var trophy = document.getElementById(\"coppa\");
          var recently = document.getElementById(\"recenti\");
          var icon = document.getElementById(\"iconaUtente\");
          login.style.display=\"none\";
          trophy.style.display=\"inline\";
          recently.style.display=\"block\";
          icon.style.display=\"inline\";
        }
        setLoggedPage();

        </script>";
        
        session_destroy();
      }

     ?>

  
    
      
    
      <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/footerPHP.php") ?>
    
</body>
</html>

    <!--tasto logout nell'area personale-->
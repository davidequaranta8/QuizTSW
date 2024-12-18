<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/homepage/homeStyle.css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/homepage/icone/Logo_40x40.ico">
    <script src='main.js'></script>
</head>
<body>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/homepage/headerPHP.php") ?>

    <div class="slideshow-container">
        
        <div class="Row1">
          <div id="title">Categoria 1</div>
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" width="175px" heigth="150px">
          <img src="/PROGETTO_TSW/homepage/icone/freccia.png">
        </div>
      
        <div class="mySlides fade">
          <div>Categoria 2</div>
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" >
          <div class="text">Another Caption</div>
        </div>
      
        <div class="mySlides fade">
          <div>Categoria 3</div>
          <img src="/PROGETTO_TSW/homepage/icone/phpCopertina.jpg" >
          <div class="text">Third Caption</div>
        </div>

    </div>

    
      <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/homepage/footerPHP.php") ?>
    
</body>
</html>
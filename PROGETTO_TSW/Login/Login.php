<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="/PROGETTO_TSW/Login/loginStyle.css" type="text/css">
    <link rel="stylesheet" href="/PROGETTO_TSW/utility/headerStyle.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_40x40.ico">
    <script src="/PROGETTO_TSW/Login/scriptLogin.js" type="text/javascript"></script>
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/headerPHP.php'; ?>
    
    

    <div id="login"> 
        <h2 id="title">Login</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formLogin" method="POST" onSubmit="return invioDati()">
            
        <label for="email" id="labEMail">  
            E-Mail: <br/> <input type="email" id="email" name="email" placeholder="Inserire E-Mail" class="textField">
            <span id="emailError" class="error" >Inserire E-Mail</span>
        </label>

        <br/>

        <label for="password" id="labPassword"> <!-- fare controllo password  che la password sia stata inserita -->
            Password:<br/><input type="password" name="password" id="password" placeholder="Inserire Password" class="textField">
            <span id="passwordError" class="error"></span>
        </label>

        </form>
            
        <p id="dimenticatoPassword">Forgot Password?</p>

        <input type="submit" name="loginBtn" id="loginBtn" value="Login" form="formLogin">
        <br/>

        <p id="registrazione">Non sei registrato? <a href="">Clicca qui.</a></p>
        
    </div>
    
    <!--
        attributo for di <label> è uguale all'ID dell'input a cui si riferisce.
        attributo name è il nome usato con php per ricavare il contenuto.
    -->

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/db.php'; // includo il file in cui effettuo la connessione al DB
    // controllo se l'utente è già registrato
    //altrimenti messaggio di errore con JS
    include_once$_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/Login/selectFromDB.php'; //includo il file dove cerco il file nel DB
?>


</body>
</html>


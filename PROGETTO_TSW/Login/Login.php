<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="/PROGETTO_TSW/Login/loginStyle.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/homepage/icone/Logo_40x40.ico">
</head>
<body>
    <header>
        <img src="/PROGETTO_TSW/Login/icone/Logo_40x40.png" alt="LOGO" width="40px" heigth="40px">
        <img  id="iconaUtente" alt="ICONA UTENTE" src="/PROGETTO_TSW/Login/icone/icona-utente.png" width="40px" heigth="40px">
    </header>
    
    <div id="login"> <!-- chiedere anche se va bene aver lesso questo div esterno  -->
        <h2 id="title">Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formLogin" method="GET">
            
            <label for="username"> 
                <p id="parUsername">Username:<input type="text" id="username" name="username" placeholder="Inserire Username"></p> 
                <!-- 
                chiedere a donato se secondo lui vanno bene questi p
                oppure
                se devo togliere le label 
                -->
            </label>
            
            <label for="password"> 
                <p id="parPassword">Password:<input type="password" name="password" id="password" placeholder="Inserire Password" ></p>
            </label>
        </form>
            
        <p id="dimenticatoPassword">Forgot Password?</p>

        <input type="submit" name="loginBtn" id="loginBtn" value="Login" form="formLogin">
        <br>

        <p id="registrazione">Non sei registrato? <a href="">Clicca qui.</a></p>

    </div>
    <!-- rivedere quando usare name id e for nel form -->

    <!--
        attributo for di <label> è uguale all'ID dell'input a cui si riferisce.
        attributo name è il nome usato con php per ricavare il contenuto.
    -->
</body>
</html>

<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/Login/db.php'; // includo il file in cui effettuo la connessione al db
    // controllo se l'utente è già registrato
    //altrimenti messaggio di errore con JS
?>
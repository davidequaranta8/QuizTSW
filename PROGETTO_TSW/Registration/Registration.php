<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="/PROGETTO_TSW/Registration/regStyle.css" type="text/css">
    <link rel="stylesheet" href="/PROGETTO_TSW/utility/headerStyle.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_40x40.ico">
    <script src="/PROGETTO_TSW/Registration/scriptReg.js" type="text/javascript"></script>

</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/headerPHP.php'; ?>

    <div id="registrazione"> 
        <h2 id="title">Registration</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formReg" method="POST" onSubmit="return invioDati()">
        <div id="divNomeCognome">
            <label for="nome"id="labNome">
                Nome:<br/> <input type="text" id="nome" name="nome" placeholder="Inserire Nome" class="textField">
                <span id="nomeError" class="error">Inserire Nome</span>
            </label>

            <label for="cognome" id="labCognome">
                Cognome:<br/> <input type="text" id="cognome" name="cognome" placeholder="Inserire Cognome" class="textField">
                <span id="cognomeError" class="error">Inserire Cognome</span>
            </label>
        </div>
        <br/>
        <label for="username">
            Username:<br/> <input type="text" id="username" name="username" placeholder="Inserire Username" class="textField">
            <span id="usernameError" class="error">Inserire Username</span>
        </label>
        <br/>
        <label for="email" id="labEMail">  
            E-Mail: <br/> <input type="email" id="email" name="email" placeholder="Inserire E-Mail" class="textField" onBlur="controlloUtenteRegistrato()">
            <span id="emailError" class="error">Inserire E-Mail</span>
        </label>

        <br/>

        <label for="password" id="labPassword" > <!-- fare controllo password  che la password sia stata inserita -->
            Password:<br/><input type="password" name="password" id="password" placeholder="Inserire Password" class="textField" onBlur="controlloCaratteriPassword()">
            <span id="passwordError" class="error">Inserire Password</span>
        </label>
        <br/>
        <label for="repassword" id="labRepassword"> <!-- fare controllo password  che la password sia stata inserita -->
            Conferma Password:<br/><input type="password" name="repassword" id="repassword" placeholder="Conferma Password" class="textField">
            <span id="rePasswordError" class="error">Inserire Conferma Password</span>
        </label>
        </form>
            
        <p id="login">Sei già registrato? <a href="">Clicca qui.</a></p>

        <input type="submit" name="regBtn" id="regBtn" value="Create Account" form="formReg">
        <br/>

    </div>

</body>
</html>

<?php
     
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/db.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/Registration/insertIntoDB.php'; 

    

    // controllo per password e Re-Password uguali (lato JAVASCRIPT) +++
    
    // controllo che la password abbiamo almeno x elementi ecc.. (length almeno 8, maiusc, numero, simbolo??) ( solo in REGISTRAZIONE ) +++

    // controllo se sono stati compilati i TextField +++

    // controllo in login per la password con password_verify (così indichiamo password inserita corretta o sbagliata) +++

    

    //rimettere la password con type="password"  +++

    //correggere testo per errore di contenuto della password +++



    // if(isset($_POST['nome'])){ //mettere anche gli altri (in insertIntDB.php)
    
    // controllo per utente già registrato (PHP) ( accedo al file selectFromDB che sta nella cartella login e vedo se l'utente c'è già)

    //controllo per svuotare la pass e repass quando clicco "create account" ma la pass è sbagliata 
    
    //mettere su un unica pagina LOGIN e REGISTRAZIONE 

?>
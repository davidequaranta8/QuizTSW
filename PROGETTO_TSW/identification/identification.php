<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Identification</title>
<!-- StyleSheet -->
    <link rel="stylesheet" href="/PROGETTO_TSW/identification/identificationStyle.css" type="text/css">
    <link rel="stylesheet" href="/PROGETTO_TSW/utility/headerStyle.css" type="text/css">
<!-- img -->
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">
<!-- script -->
    
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/headerPHP.php'; ?>
    <script src="/PROGETTO_TSW/identification/scriptIdentification.js" type="text/javascript"></script> <!-- va messo dopo l'include perchè c'è una funzione nel js che si riferisce ad un elemento dell'header -->
    

    <div id="login" class="mostra">
        <h2 id="title">Login</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formLogin" method="POST" onSubmit="return invioDatiLogin()">
            
        <label for="emailLog" id="labLogEMail">  
            E-Mail: <br/> <input type="email" id="emailLog" name="emailLog" placeholder="Inserire E-Mail" class="textFieldLog">
            <span id="emailLogError" class="errorLog" >Inserire E-Mail</span>
        </label>

        <br/>

        <label for="passwordLog" id="labLogPassword"> <!-- fare controllo password  che la password sia stata inserita -->
            Password:<br/><input type="password" name="passwordLog" id="passwordLog" placeholder="Inserire Password" class="textFieldLog">
            <span id="passwordLogError" class="errorLog">Inserire Password</span>
        </label>

        </form>
            
        <p id="dimenticatoPassword">Forgot Password?</p>

        <input type="submit" name="loginBtn" id="loginBtn" value="Login" form="formLogin">
        <br/>

        <p id="switchToReg">Non sei registrato? <span class="clickTo" onclick="switchToReg()">Clicca qui.</a></p>
        
    </div>
    




    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/db.php'; // includo il file in cui effettuo la connessione al DB
        // controllo se l'utente è già registrato
        //altrimenti messaggio di errore con JS
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/selectFromDB.php'; //includo il file dove cerco il file nel DB

     
    ?>




<!-- REGISTRAZIONE -->

<div id="registrazione" class="mostra"> 
        <h2 id="title">Registration</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formReg" method="POST" onSubmit="return invioDatiReg()">
        <div id="divNomeCognome">
            <label for="nome"id="labNome">
                Nome:<br/> <input type="text" id="nome" name="nome" placeholder="Inserire Nome" class="textFieldReg">
                <span id="nomeError" class="errorReg">Inserire Nome</span>
            </label>

            <label for="cognome" id="labCognome">
                Cognome:<br/> <input type="text" id="cognome" name="cognome" placeholder="Inserire Cognome" class="textFieldReg">
                <span id="cognomeError" class="errorReg">Inserire Cognome</span>
            </label>
        </div>
        <br/>
        <label for="username">
            Username:<br/> <input type="text" id="username" name="username" placeholder="Inserire Username" class="textFieldReg">
            <span id="usernameError" class="errorReg">Inserire Username</span>
        </label>
        <br/>
        <label for="emailReg" id="labRegEMail">  
            E-Mail: <br/> <input type="email" id="emailReg" name="emailReg" placeholder="Inserire E-Mail" class="textFieldReg" onBlur="controlloUtenteRegistrato()">
            <span id="emailRegError" class="errorReg">Inserire E-Mail</span>
        </label>

        <br/>

        <label for="passwordReg" id="labPassword" > <!-- fare controllo password  che la password sia stata inserita -->
            Password:<br/><input type="password" name="passwordReg" id="passwordReg" placeholder="Inserire Password" class="textFieldReg" onBlur="controlloCaratteriPassword()">
            <span id="passwordRegError" class="errorReg">Inserire Password</span>
        </label>
        <br/>
        <label for="repassword" id="labRepassword"> <!-- fare controllo password  che la password sia stata inserita -->
            Conferma Password:<br/><input type="password" name="repassword" id="repassword" placeholder="Conferma Password" class="textFieldReg">
            <span id="rePasswordError" class="errorReg">Inserire Conferma Password</span>
        </label>
        </form>
            
        <p id="switchToLogin">Sei già registrato? <span class="clickTo" onclick="switchToLog()">Clicca qui.</span></p>

        <input type="submit" name="regBtn" id="regBtn" value="Create Account" form="formReg">
        <br/>

    </div>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PROGETTO_TSW/utility/insertIntoDB.php';
    ?>
</body>
</html>


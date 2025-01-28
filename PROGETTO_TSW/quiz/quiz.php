<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Intro-Quiz</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/utility/headerStyle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/PROGETTO_TSW/quiz/quiz.css">
    <link rel="icon" type="image/x-icon" href="/PROGETTO_TSW/utility/icone/Logo_codeQuiz.ico">

</head>
<body onload="setLoggedPage()">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/PROGETTO_TSW/utility/headerPHP.php"); ?></br>
    <script src="/PROGETTO_TSW/quiz/quiz.js" type="text/javascript" ></script>
    <?php
    session_start();
    if(!isset($_POST['playBtn'])){ /* serve per distinguere se abbiamo avviato il QUIZ o stiamo nella intro_quiz */
    if(isset($_SESSION['loginFlag']) && isset($_GET['id'])){ ?> <!-- loginFlag controlla se siamo loggati |||| id indica il nome del QUIZ ottenuto dalla HOME/CATALOGO -->
    <div id="containerIntroQuiz">
        <div id="title"><!-- nome del quiz -->
            <?php  
                $array = explode("-", $_GET['id']);
                echo $array[0] . "</br>" . $array[1];
            ?>
        </div>

        <img src="/PROGETTO_TSW/utility/icone/wallpaper_intro_quiz.png" alt="wallpaper" id="wallpaper_intro" width="768px" heigth="350px">
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="form" method="POST"> <!-- gli elementi del form li uso per accedere al db -->
            <input type="hidden" id="id_quiz" name="id_quiz" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}else{echo "";}?>"> 
            <!-- il controllo in php lo possiamo anche rimuovere nel momento in cui imponiamo che per accedere a tale pagina si debba essere loggati per forza -->
            <input type="submit" name="playBtn" id="playBtn" value="PLAY" >
        </form>
        
    </div>

        <?php }else{ /* viene eseguito quando non siamo LOGGATI o non abbiamo $_GET['id'] impostata */
            $_SESSION['noLoggedAttempt'] = $_SERVER['PHP_SELF'];  /* serve per mostrare il popUp nella HOME/CATALOGO , inizializzato a caso */
            header("location: /PROGETTO_TSW/homepage/homePHP.php"); /* torno alla home */
            }}else{?> <!-- se accediamo direttamente alla pagina intro_quiz veniamo reindirizzati alla HOMEPAGE e ci viene chiesto di loggarci -->
            
            <div id="containerQuiz" >
                <div id="headerQuiz">
                    <span id="info">
                        
                        <h3 id="titleQuiz">
                            <?php  
                            echo $_POST['id_quiz'];
                            ?>
                        </h3>
                        <span id="score">Score: 0</span>
                        <span id="numberQuestion">x/5</span>
                    </span>

                    <!-- <span id="navigationQuiz"><span id="backBtn">&larr; Back</span><span id="nextBtn">Next &rarr;</span></span> -->
                </div>
                <p id="question"></p> <!-- qui dobbiamo pescare le cose dal DB -->
            
                <div id="answers">
                    <p id="answer1" onclick="takeAnswer(event)"></p>
                    <p id="answer2" onclick="takeAnswer(event)"></p>
                    <p id="answer3" onclick="takeAnswer(event)"></p>
                    <p id="answer4" onclick="takeAnswer(event)"></p>
                </div>
            </div>

            <script >takeQuiz();</script> <!-- è necessario metterlo alla fine perchè dobbiamo prelevare il contenuto di titleQuiz quindi aspettiamo che venga prima popolato il suo contenuto -->
               
            <!--pop-up che appare solo se si prova ad avviare un quiz e non si è loggati-->
            <div id=boxPopUp><!--definisco un contenitore esterno per poter applicare la sfocatura-->
                <div id="popUp">
                    
                    <h2>Quiz Terminato!</h2>
                    <p id="scorePopUp"></p>
                    <div id="bottons">
            
                        <!-- FORM per quando vogliamo rigiocare e quindi ripassiamo il nome del quiz con GET per poter cercare nuovamente nel DB quando avviamo il quiz -->
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formReplay" method="GET"> 
                            <input type="hidden" name="id" value="<?php echo $_POST['id_quiz']; ?>" id="id"> 
                            <input type="submit" name="replay" id="replay" value="Play Again" >
                        </form>

                        <!-- FORM per poter salvare gli elementi nella tableChronology quando premiamo il tasto EXIT -->
                        <form action="/PROGETTO_TSW/utility/insertUpdateTableChronology.php" id="formExit" method="POST"> 
                            <input type="hidden" name="scoreForm" value="" id="scoreForm">
                            <input type="hidden" name="nameQuiz" value="<?php echo $_POST['id_quiz']?>" id="nameQuiz">
                            <input type="submit" name="exit" id="exit" value="Exit" >
                        </form>
                    </div>

                </div>  
            </div>
        <?php } ?>
</body>
</html>

var num = 0;
/* viene incrementato ogni volta che clicchiamo su una risposta perchè poi automaticamente viene caricata la domanda successiva*/
/* viene resettato quando terminiamo il quiz */
var score = 0;
function setLoggedPage(){//imposta la visualizzazione per l'utente loggato
  var login = document.getElementById("loginStr");
  var logout = document.getElementById("logoutStr");
  var trophy = document.getElementById("trophy");
  var icon = document.getElementById("iconaUtente");
  login.style.display="none";
  logout.style.display="inline";
  trophy.style.display="inline";
  icon.style.display="inline";
}

function takeAnswer(event){ 
  var answer = event.target.textContent; /* prelevo il testo della risposta così lo comparo con il contenuto della risposta corretta del DB */
  num = num +1; /* uso questo numero per gestire tutte le varie domande di un singolo quiz */
  
  var httpRequest = new XMLHttpRequest();
  httpRequest.open("POST", "/PROGETTO_TSW/utility/selectQuiz.php",true); /* definisco il tipo di connessione da aprire */

  httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
/* con questa istruzione indichiamo il formato con cui vengono passate le informazioni nella httpRequest.send(); */

  httpRequest.responseType= "json"; /* indichiamo il tipo di dato di ritorno, quindi un obj JSON */

  
  httpRequest.onload = function(){ /* al termine dell'esecuzione della richiesta (selectQuiz.php) viene eseguita questa funzione  */
      if(answer == httpRequest.response[num-1].risposta_corretta){ // Evidenzio se la risposta indicata è corretta o sbagliata
        document.getElementById(event.target.getAttribute("id")).style.backgroundColor = "green";
        score = score + 1; //punteggio
        document.getElementById("score").innerText = "Score: " + score; //aggiorno il punteggio sulla schermata del quiz
      }else{
        document.getElementById(event.target.getAttribute("id")).style.backgroundColor = "red";
        score = score -0.5; //punteggio
        document.getElementById("score").innerText = "Score: " + score; //aggiorno il punteggio sulla schermata del quiz
      }
      if(num < 5){ // MOSTRO LE DOMANDE SUCCESSIVE
        setTimeout(resetBackgroundColor,300); //imposto una sleep per poi poter eseguire resetBackgroundColor() in modo tale che viene prima mostrato il risultato
        
        setTimeout(takeQuiz,302); // è necessario impostarlo anche qui altrimenti viene eseguita prima di resetBackgroundColor() che viene rallentata
      }else{ //QUIZ TERMINATO
        num = 0;
        document.getElementById("boxPopUp").style.display = "inline-block"; //mostro il popUp
        document.getElementById("scorePopUp").innerText = "Score: " + score; //serve per mostrare nel popUp il punteggio
        document.getElementById("scoreForm").value = score; //aggiorno il contenuto dell'input hidden del form in modo tale che poi posso usarlo per salvarlo nel DB
        
        score = 0; //azzero lo score per i prossimi quiz
      }
      
  };
  var quizTitle = document.getElementById("titleQuiz").innerText; /* prelevo il campo id_quiz, per fare la richiesta al DB */ 
  httpRequest.send("id_quiz="+ quizTitle);
}

function resetBackgroundColor(){
  document.getElementById("answer1").style.backgroundColor = "white";
  document.getElementById("answer2").style.backgroundColor = "white";
  document.getElementById("answer3").style.backgroundColor = "white";
  document.getElementById("answer4").style.backgroundColor = "white";
}
function takeQuiz(){
  
  var httpRequest = new XMLHttpRequest();
  
  httpRequest.open("POST", "/PROGETTO_TSW/utility/selectQuiz.php",true); /* definisco il tipo di connessione da aprire */
  
  httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  /* con questa istruzione indichiamo il formato con cui vengono passate le informazioni nella httpRequest.send(); */

  httpRequest.responseType= "json"; /* indichiamo il tipo di dato di ritorno, quindi un obj JSON */

  
  httpRequest.onload = function(){ /* al termine dell'esecuzione della richiesta (selectQuiz.php) viene eseguita questa funzione  */
    
    document.getElementById("numberQuestion").innerHTML = (httpRequest.response[num].id_domanda + "/5");
    
    document.getElementById("question").innerHTML = httpRequest.response[num].domanda; /* con JSON.stringify(httpRequest.response[num].domanda); traduciamo il file JSON in stringa*/
    var answers = httpRequest.response[num].possibili_risposte.split("\n");
    document.getElementById("answer1").innerHTML = answers[0];
    document.getElementById("answer2").innerHTML = answers[1];
    document.getElementById("answer3").innerHTML = answers[2];
    document.getElementById("answer4").innerHTML = answers[3];
  };

  var quizTitle = document.getElementById("titleQuiz").innerText; /* prelevo il campo id_quiz, per fare la richiesta al DB */ 
  httpRequest.send("id_quiz="+ quizTitle);
}

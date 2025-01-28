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

function takeInfo(){
    var httpRequest = new XMLHttpRequest();
  
    httpRequest.open("POST", "/PROGETTO_TSW/utility/selectInfoFROMTableUser.php",true); /* definisco il tipo di connessione da aprire */
    
    httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    /* con questa istruzione indichiamo il formato con cui vengono passate le informazioni nella httpRequest.send(); */

    httpRequest.responseType= "json"; /* indichiamo il tipo di dato di ritorno, quindi un obj JSON */

    
    httpRequest.onload = function(){ /* al termine dell'esecuzione della richiesta (selectInfoFROMTableUser.php) viene eseguita questa funzione  */
        document.getElementById("name").innerHTML = "Nome: <em>" + httpRequest.response[0]+ "</em>";
        document.getElementById("surname").innerHTML = "Cognome: <em>" + httpRequest.response[1] + "</em>";
        document.getElementById("username").innerHTML = "Username: <em>" + httpRequest.response[2]+ "</em>";
        document.getElementById("avatarUtente").setAttribute("src",httpRequest.response[3]); 
    };

    var email = document.getElementById("email").innerText.split(": "); 
    /* prelevo il campo email, per fare la richiesta al DB, e faccio la split poichè prelevo tutta la stringa "email: ...@..it " quindi da essa mi serve solo ...@...it*/ 
    httpRequest.send("email="+ email[1]);
}
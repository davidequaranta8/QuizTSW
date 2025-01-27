function setLoggedPage(){//imposta la visualizzazione per l'utente loggato
    var login = document.getElementById("loginStr");
    var trophy = document.getElementById("coppa");
    var recently = document.getElementById("recenti");
    var icon = document.getElementById("iconaUtente");
    login.style.display="none";
    trophy.style.display="inline";
    recently.style.display="block";
    icon.style.display="inline";
 }

 /*
 function setNoLoggedPage(){//imposta la visualizzazione di default(utente non loggato)
    var login = document.getElementById("loginStr");
    var trophy = document.getElementById("coppa");
    var recently = document.getElementById("recenti");
    var icon = document.getElementById("iconaUtente");
    login.style.display="inline";
    trophy.style.display="none";
    recently.style.display="none";
    icon.style.display="none";
 }*/
function invioDati(){
   

    var textfield = document.getElementsByClassName("textField");
    var errori = document.getElementsByClassName("error");
    var flag2=false;

    for(var i=0;i<textfield.length;i++){ //scorro tutti i textfield
        if(textfield[i].value == ""){ //controllo se sono vuoti
            //se vuoti mostro il msg di errore che vanno popolati
            errori[i].style.visibility = 'visible';
            flag2 = true; //tramite questo flag capisco se c'è qualche TextField non popolato e di conseguenza faccio ritornare false così non viene inviamo il form al DB
        }else{
            
            if(textfield[i].getAttribute("id") != "password"){ // vedo se è l'elemento password e nel caso non lo nascondo (perchè magari è popolato il TextField ma non correttamente e quindi stiamo mostrando il msg di errore dato da controlloCaratteriPassword)
                errori[i].style.visibility = 'hidden';
            }
        
    }
    }

    if(flag2){
        return false;
    }

    return (true && controlloCorrispondenzaPassword() && controlloCaratteriPassword()); //richiamo gli altri metodi in modo tale che se c'è ancora qualche altro errore non viene inviato il form al DB
}

function controlloCorrispondenzaPassword(){
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("repassword");
    var err = document.getElementById("rePasswordError");
    if(pass1.value != pass2.value){
        err.innerText = "Password non corrispondenti";
        err.style.visibility = 'visible';
        
        return false;
    }
    err.style.visibility = 'hidden';
    return true;
}

function controlloCaratteriPassword(){
    var pass = document.getElementById("password");
    var err2 = document.getElementById("passwordError");
    var lungMin = false; 
    var contieneMaiuscola = false;
    var contieneNumero = false;
    var str = pass.value;

    if(str.length >= 8){ //controllo se è lunga almeno 8 caratteri
        
        lungMin =true;
    }

    // controllo se c'è un carattere maiuscolo
    for (var i = 0; i < str.length; i++) {
        if (str[i] === str[i].toUpperCase()) {
            if(isNaN(str[i])){ //confronto che i caratteri uguali non siano numeri
                contieneMaiuscola = true;
                break;  // Esci dal ciclo appena trovi una maiuscola
            }
        }
    }

    //valuto se c'è un numero 
    for (var i = 0; i < str.length; i++) {
        if(!isNaN(str[i])){ 
            contieneNumero = true;
            break;
        }
    }

    if(lungMin && contieneMaiuscola && contieneNumero ){
        err2.innerText = "Inserire Password";
        err2.style.visibility = 'hidden';
        return true; //password corretta
    }else{
        err2.innerText = "La password deve essere composta da almeno 8 caratteri, contenere almeno una lettera maiuscola ed un numero.";
        err2.style.visibility = 'visible';
        return false; //password errata
    }
}

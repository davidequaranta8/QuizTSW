function invioDati(){
    var mail = document.getElementById("email");
    var pass = document.getElementById("password");
    if(mail.value == "" && pass.value == ""){
        var err1 = document.getElementById("emailError");
        var err2 = document.getElementById("passwordError");
        err1.style.visibility = 'visible';
        
        err2.innerText = "Inserire Password";
        err2.style.visibility = 'visible';
        return (false);
    }
    if(mail.value == "" && pass.value != ""){
        var err1 = document.getElementById("emailError");
        var err2 = document.getElementById("passwordError");
        err1.style.visibility = 'visible';
        err2.style.visibility = 'hidden';
        return (false);
    }
    if(mail.value != "" && pass.value == ""){ 
        var err1 = document.getElementById("emailError");
        var err2 = document.getElementById("passwordError");
        err1.style.visibility = 'hidden';
        err2.innerText = "Inserire Password";
        err2.style.visibility = 'visible';
        return (false);
    }
    return (true);
}
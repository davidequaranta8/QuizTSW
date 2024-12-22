
let slideIndex = 0; // Indice iniziale

setBlocks();//inizializzo i blocchi che tracciano lo scorrimento
//setLoggedPage();
// Funzione per mostrare la sequenza di slide correnti
function showSlides(classname,id,index) {
  const blocks = document.querySelectorAll(classname + " .block");
  slideIndex=index;
  const slides1 = document.querySelectorAll(id + " .visible");/*primo blocco di slide visibili*/
  const slides2 = document.querySelectorAll(id + " .hidden");/*secondo blocco di slide non ancora visibile*/
  if(index==1){/*se ci troviamo nella prima parte*/
    
    for(let i=0;i<(slides1.length)-2;i++){
      slides1[i].className="hidden";/*imposta come hidden le prime tre slide*/
    }

    slides2.forEach((slide) => {
      slide.className="visible";/*imposta come visibile il secondo blocco di slide*/
    });

    
    blocks[0].classList.remove("active");
    blocks[1].classList.add("active");
    

  }else if(index==2){//caso in cui è stato già fatto uno scorrimento
    /*ripristino la disposizione iniziale*/
    const slidesH = document.querySelectorAll(id + " .hidden");//preleva tutte le img nascoste
    slidesH.forEach((slide) => {
          slide.className="visible";//rende temporaneamente tutte le img visibili
    });

    const tot = document.querySelectorAll(id + " .visible");//preleva tutte le img
    for(let i=5;i<(tot.length);i++){
      tot[i].className="hidden";//reimpostiamo le ultime 3 img nascoste
    }

    
    blocks[1].classList.remove("active");
    blocks[0].classList.add("active");

    slideIndex=0;//resettiamo l'indice

  }

}


  // Funzione per navigare avanti o indietro
  function plusSlides(classname,id,n) {
    slideIndex += n;
    showSlides(classname,id,slideIndex);
  }

  function setBlocks(){
    document.querySelectorAll(".block-container1 .block")[0].classList.add("active");
    document.querySelectorAll(".block-container2 .block")[0].classList.add("active");
    document.querySelectorAll(".block-container3 .block")[0].classList.add("active");
  }

/*
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
*/
 function setNoLoggedPage(){//imposta la visualizzazione di default(utente non loggato)
    var login = document.getElementById("loginStr");
    var trophy = document.getElementById("coppa");
    var recently = document.getElementById("recenti");
    var icon = document.getElementById("iconaUtente");
    login.style.display="inline";
    trophy.style.display="none";
    recently.style.display="none";
    icon.style.display="none";
 }
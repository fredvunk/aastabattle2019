openNav = document.querySelector('#openMobileMenu'); // Muutuja hamburger buttonil
mobileNav = document.querySelector('.mobile-nav'); // Muutuja mobiilivaates oleva menüü jaoks

navigationList = document.querySelector('.mobile-nav .navigation');  // Muutuja mobiilivaates oleva menüü sisu jaoks

openNav.addEventListener("click", openMobileNav);

mobileMenuStatus = "closed"; // Menüü staatus -- default = "suletud"

function openMobileNav(){
    
    if (mobileMenuStatus === "closed") {  // Kontrollib, kas mobiili menüü on suletud
    
        mobileNav.style.height = "100%";                        // Kui menüü on suletud
        navigationList.style.transform = "translateY(0px)";     // Annab menüü kõrgusele väärtuse 100%
        mobileMenuStatus = "opened";                            // Ja liigutab menüü sisu vaatevälja
                                                                // Määrab menüü staatuse "Avatud"-ks
    
    } else if (mobileMenuStatus === "opened") {                 // Kontrollib, kas mobiili menüü on avatud
                                                                
        mobileNav.style.height = "0";                           // Kui on avatud
        navigationList.style.transform = "translateY(-400px)";  // Annab menüü kõrgusele väärtuse 0
        mobileMenuStatus = "closed";                            // Liigutab menüü sisu vaateväljast välja
                                                                // Määrab menüü staatuse "Suletud"-ks
    }
        
        
        
};


function check() {
    var q1=document.myform.q1.value;
    var q2=document.myform.q2.value;
    var q3=document.myform.q3.value;
    var q4=document.myform.q4.value;
    var q5=document.myform.q5.value;
    var count=0;
    
    if(q1=="b"){
        count++;
    }if(q2=="a"){
        count++;
    }if(q3=="a"){
        count++;
    }if(q4=="b"){
        count++;
    }if(q5=="c"){
        count++;
    }
    alert("Saite "+count+" punkti");
}

function checkcss() {
    var q6=document.myformcss.q6.value;
    var q7=document.myformcss.q7.value;
    var q8=document.myformcss.q8.value;
    var q9=document.myformcss.q9.value;
    var q10=document.myformcss.q10.value;
    var count=0;

    if(q6=="c"){
        count++;
    }if(q7=="a"){
        count++;
    }if(q8=="a"){
        count++;
    }if(q9=="a"){
        count++;
    }if(q10=="b"){
        count++;
    }
    alert("Saite "+count+" punkti");
}
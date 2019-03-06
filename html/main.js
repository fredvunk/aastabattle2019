openNav = document.querySelector('#openMobileMenu');
mobileNav = document.querySelector('.mobile-nav');

navigationList = document.querySelector('.mobile-nav .navigation');

openNav.addEventListener("click", openMobileNav);

mobileMenuStatus = "closed";

function openMobileNav(){
    
    if (mobileMenuStatus === "closed") {
    
        mobileNav.style.height = "100%";
        navigationList.style.transform = "translateY(0px)";
        mobileMenuStatus = "opened";
    
    } else if (mobileMenuStatus === "opened") {
        
        mobileNav.style.height = "0";
        navigationList.style.transform = "translateY(-400px)";
        mobileMenuStatus = "closed";
        
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
    }if(q3=="c"){
        count++;
    }if(q4=="b"){
        count++;
    }if(q5=="c"){
        count++;
    }
    alert("Saite "+count+" punkti");
}
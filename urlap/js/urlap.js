function regForm(){
    form = document.getElementsByTagName("input");
    return form;
}

function userCheck(){
    var userName = document.getElementById("username").value;
    userName = userName.trim();
    document.getElementById("userNameError").innerHTML = "";
    
    if (userName.length > 7 && userName.length < 26) {
        if(isFinite(userName[0])){
           document.getElementById("userNameError").innerHTML = "Nem kezdődhet számmal!";
       }
    } else {
        document.getElementById("userNameError").innerHTML="8 és 25 karaklter közöttinek kell lennie a felhasználónévnek!";
    }
}

function userCheck2(urlap){
    console.log(urlap[0].value);
}

function pwdCheck(){
    
    document.getElementById("pwdError").innerHTML="";
    let pwd = document.getElementById("password").value;
    let pwdlength = pwd.length;
    
    // console.log(typeof (document.getElementById("password").value));
    // console.log(pwdlength);
    
    if (pwdlength > 7) {
                
        if (!vanEBenneSzam(pwd)) {
            document.getElementById("pwdError").innerHTML="A jelszónak számot is kell tartalmaznia!";
        }
        
        if (!kisNagyBetu(pwd)) {
            document.getElementById("pwdError").innerHTML+=" A jelszóban legalább egy kis- és nagybetűt is kell tartalmazia!";
        }
    } else {
        document.getElementById("pwdError").innerHTML="A jelszó nem lehet 8 karakternél kevesebb!";
    }
}

function checkEmail(){
    
    // Email check   
    
}

function vanEBenneSzam(szo){
    
    let hossz = szo.length;
    
    for (var i = 0; i < hossz; i++) {
     
        if (isFinite(szo.charAt(i))) {
            return true;
        }        
    }  
    return false;
}

function kisNagyBetu(szo){
    
    if (szo==szo.toLowerCase() || szo==szo.toUpperCase()){
        return true;
    }    
    return false;
}

function pwdEqual() {
    
    let pwd = document.getElementById("password").value;
    let pwdC = document.getElementById("confirmpassword").value;
    let equal = false;
    
    document.getElementById("pwdEqualError").innerHTML = "";
        
    if (pwd === pwdC) {
        
        equal = true;
        
    } else {
        document.getElementById("pwdEqualError").innerHTML = "Nem egyezik a két jelszó!";           
        equal = false;
    }
    
    console.log(equal);
}

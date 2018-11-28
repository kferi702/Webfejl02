function checkZip(){
    
    var validZip = new RegExp("^[1-9]{1}[0-9]{3}$");
    var zip = document.getElementById("zip").value; //!!!
    
    var result = validZip.test(zip);
    
    console.log(result);
    
    if (result) {
        document.getElementById("zipMsg").innerHTML = "Helyes irányítószám!";
    }else{
        document.getElementById("zipMsg").innerHTML = "Helytelen irányítószám!";
    }    
}

// Gender Selected 
function validateGen() {
    var gn = document.getElementsByName("gender");
    var checked = false;
    for (var i = 0; i < gn.length; i++) {
        if (gn[i].checked) {
            checked = true;
            break;
        }
    }
    return checked;
}

function Validation() {
    let hasErr=false;
    let name = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let speciality = document.getElementById("speciality").value;
    let Email = document.getElementById("email").value;
    let mobile = document.getElementById("phone").value;
    
    // Name Validation 

    if (name == "") {
        document.getElementById("ErrName").innerHTML = "Name Can not be empty";
        hasErr=true;
    }
    else if (name.length < 5 ) {
        document.getElementById("ErrName").innerHTML = "Name must contain 5 character";
        hasErr=true;
    }
    else {
        document.getElementById("ErrName").innerHTML = "";
        hasErr=false;
    }

    // User Name ........ 

    if (username == "") {
        document.getElementById("ErrUName").innerHTML = "Username Can not be empty";
        hasErr=true;
    }
    else {
        document.getElementById("ErrUName").innerHTML = "";
        hasErr=false;
    }

    // Specility ......... 

    if (speciality=="") {
        document.getElementById("ErrSpec").innerHTML = "Speciality Must Need!";
        hasErr=true;
    }
    else {
        document.getElementById("ErrSpec").innerHTML = "";
        hasErr=false;
    }

    // Email .... 
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (Email == "") {
        document.getElementById("ErrMail").innerHTML = "Email Can not be empty";
        hasErr=true;
    }
    else if (!Email.match(re)) {
        document.getElementById("ErrMail").innerHTML = "** Email Invalid ";
        hasErr=true;
    }
    else {
        document.getElementById("ErrMail").innerHTML = "";
        hasErr=false;
    }

    
    // Password 
    const  alphanumericExp = /^[0-9a-zA-Z]+$/; 
    if (password == ""){
        document.getElementById("ErrPass").innerHTML = " **Password Should not be Empty !"; 
        hasErr = true; 
    }
    else if (password.length < 6 ){
        document.getElementById("ErrPass").innerHTML = " **Password Should be 6 digits !"; 
        hasErr = true; 
    }
    else if (!password.match(alphanumericExp)){
        document.getElementById("ErrPass").innerHTML = " **Password Not Valid !"; 
        hasErr = true; 
    }
    else {
        document.getElementById("err_pass").innerHTML = ""; 
        hasErr = false;
    }

    // Mobile Validation 
    if (mobile == "") {
        document.getElementById("ErrMobile").innerHTML = "Contact Number Can not be empty";
        hasErr=true;
       
    }
    else if(mobile.length<11){
        document.getElementById("ErrMobile").innerHTML = "Contact Number must contain 11 number";
        hasErr=true;
    }

    else {
        document.getElementById("ErrMobile").innerHTML = "";
        hasErr=false;
    }

    if (validateGen() == false) {
        document.getElementById("Errgender").innerHTML = "Gender must requried";
        hasErr=true;
        //return false;
    }
    else {
        document.getElementById("Errgender").innerHTML = "";
        hasErr=false;
    }

    if(hasErr==true){
        return false;
    }



}
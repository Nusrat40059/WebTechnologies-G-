function Validation() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;




    if (username == "") {
        document.getElementById("ErrUName").innerHTML = "Username Can not be empty";
    }
    else {
        document.getElementById("ErrUName").innerHTML = "";
    }

    if (password == "") {
        document.getElementById("ErrPass").innerHTML = "Password Can not be empty ";
        return false;
    }
    else if (password.length < 6) {
        document.getElementById("ErrPass").innerHTML = "Password must contain 6 character";
        return false;
    }
    else {
        document.getElementById("ErrPass").innerHTML = "";
    }



}
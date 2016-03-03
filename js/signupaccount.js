var alertColor = "rgb(240, 191, 125)";
var regColor = "white";

function checkEmail() {
    var error = "";
    var email = document.getElementById("email").value;
    var valid = false;

    if (email == "") {
        document.getElementById("email").style.backgroundColor = alertColor;
        error = "Please enter your email address.";
    } else if (!email.match(/[0-9a-zA-Z.-_]+[@][0-9a-zA-Z]+[.][a-zA-Z]+/)) {
        document.getElementById("email").style.backgroundColor = alertColor;
        error = "You have not entered a valid email.";
    } else {
        document.getElementById("email").style.backgroundColor = regColor;
        valid = true;
    }

    document.getElementById("valEmail").innerHTML = error;

    return valid;
}
function checkUsername() {
    var username = document.getElementById("username").value;
    var error = "";
    var valid = false;

    if (username == "") {
        document.getElementById("username").style.backgroundColor = alertColor;
        error = "Please enter a username.";
    } else if (/[^a-zA-Z0-9_]/.test(username)) {
        document.getElementById("username").style.backgroundColor = alertColor;
        error = "Use only letters, digits and the _ symbol.";
    } else {
        document.getElementById("username").style.backgroundColor = regColor;
        valid = true;
    }

    document.getElementById("valUsername").innerHTML = error;

    return valid;
}

function checkFirstName() {
    var firstName = document.getElementById("firstname").value;
    var error = "";
    var valid = false; 

    if (firstName == "") {
        document.getElementById("firstname").style.backgroundColor = alertColor;
        error = "Please enter your first name.";
    } else if (/[^a-zA-Z ]/.test(firstName)) {
        document.getElementById("firstname").style.backgroundColor = alertColor;
        error = "Names can only have letters and spaces.";
    } else {
        document.getElementById("firstname").style.backgroundColor = regColor;
        valid = true; 
    }

    document.getElementById("valFirstName").innerHTML = error;

    return valid; 
}

function checkLastName() {
    var lastName = document.getElementById("lastname").value;
    var error = "";

    if (lastName == "") {
        document.getElementById("lastname").style.backgroundColor = alertColor;
        error = "Please enter your last name.";
    } else if (/[^a-zA-Z ]/.test(lastName)) {
        document.getElementById("lastname").style.backgroundColor = alertColor;
        error = "Names can only have letters and spaces.";
    } else {
        document.getElementById("lastname").style.backgroundColor = regColor;
        valid = true; 
    }
    document.getElementById("valLastName").innerHTML = error;

    return valid; 
}

function checkPW() {
    var error = "";
    var valid = false 
    if (document.getElementById("password").value == "") {
        document.getElementById("password").style.backgroundColor = alertColor;
        if (document.getElementById("confirmpw") !== null) {
            document.getElementById("confirmpw").style.backgroundColor = alertColor;
        }
        error = "Please enter a password.";
    } else {
        valid = true; 
    }
    
    document.getElementById("valPW").innerHTML = error;
    return valid; 
}

function checkPWConfirm() {
    var error = "";
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("confirmpw").value;
    var valid = false; 
    if (pw1 !== pw2) {
        document.getElementById("password").style.backgroundColor = alertColor;
        document.getElementById("confirmpw").style.backgroundColor = alertColor;
        error = "Your passwords do not match.";
    } else {
        document.getElementById("password").style.backgroundColor = regColor;
        document.getElementById("confirmpw").style.backgroundColor = regColor;
        valid = true; 
    }
    document.getElementById("valPWConfirm").innerHTML = error;
    return valid; 
}

function checkPhone() {
    var phone = document.getElementById("phone").value;
    var error = "";
    var valid = false; 
    if (phone == "") {
        document.getElementById("phone").style.backgroundColor = alertColor;
        error = "Please enter your phone number.";
    } else if (!phone.match(/[+]?[1]?[-.\s]?[0-9]{3}[-.\s]?[0-9]{3}[-.\s]?[0-9]{4}/)) {
        document.getElementById("phone").style.backgroundColor = alertColor;
        error = "This is not a valid phone number.";
    } else {
        document.getElementById("phone").style.backgroundColor = regColor;
        valid = true; 
    }
    document.getElementById("valPhone").innerHTML = error;
    return valid; 
}

function validateSignup() {
    var valid = false;
    if (checkEmail() && checkUsername() && checkPW() && checkPWConfirm() && checkPhone() && checkFirstName() && checkLastName())
    {
       valid = true;
    }
    return valid;
        
}

function validateLogin() {
    var valid = false;
    if (checkUsername() && checkPW()) {
        valid = true;
    }
    alert(valid);

    return valid;
}
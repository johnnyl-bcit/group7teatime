function checkEmail() {
	var error = ""
	var email = document.getElementById("email").value;
	
	if (email=="") {
		document.getElementById("email").style.backgroundColor = "yellow";	
		error = "Please enter your email address.";
	} else if (!email.match(/[0-9a-zA-Z.-_]+[@][0-9a-zA-Z]+[.][a-zA-Z]+/)) {
		document.getElementById("email").style.backgroundColor = "yellow";		
		error = email + " is not a valid email address.";
	} else {
		document.getElementById("email").style.backgroundColor = "white";
	}
	
	document.getElementById("validation").innerHTML = error;
}
function checkUsername() {
	var username = document.getElementById("username").value;
	var error = "";
	if (username=="") {
		document.getElementById("username").style.backgroundColor = "yellow";
		error = "Please enter a username.";
	} else if (/[^a-zA-Z0-9_]/.test(username)) {
		document.getElementById("username").style.backgroundColor = "yellow";
		error = "Your username can only contain letters, digits, and the underscore (_) character.";
	} else {
		document.getElementById("username").style.backgroundColor = "white";	
	}
	
	document.getElementById("validation").innerHTML = error;
}

function checkFirstName() {
	var firstName = document.getElementById("firstname").value;
	var error = "";
	
	if (firstName=="") {
		document.getElementById("firstname").style.backgroundColor = "yellow";
		error = "Please enter your first name.";
	} else if (/[^a-zA-Z ]/.test(firstName)) {
		document.getElementById("firstname").style.backgroundColor = "yellow";
		error = "Your first name can only contain letters and spaces.";
	} else {
		document.getElementById("firstname").style.backgroundColor = "white";
	}
	
	document.getElementById("validation").innerHTML = error;
}
function checkLastName() {
	var lastName = document.getElementById("lastname").value;
	var error = "";
	
	if (lastName=="") {
		document.getElementById("lastname").style.backgroundColor = "yellow";
		error = "Please enter your last name.";
	} else if (/[^a-zA-Z ]/.test(lastName)) {
		document.getElementById("lastname").style.backgroundColor = "yellow";
		error = "Your last name can only contain letters and spaces.";
	} else {
		document.getElementById("lastname").style.backgroundColor = "white";
	}
	
	document.getElementById("validation").innerHTML = error;
}
function checkPW() {
	var error = ""
	var pw1 = document.getElementById("password").value;
	var pw2 = document.getElementById("confirmpw").value;
	
	if (pw1=="") {
		document.getElementById("password").style.backgroundColor = "yellow";
		document.getElementById("confirmpw").style.backgroundColor = "yellow";
		error = "Please enter a password.";
	} else if (pw1!==pw2) {
		document.getElementById("password").style.backgroundColor = "yellow";
		document.getElementById("confirmpw").style.backgroundColor = "yellow";
		error = "The passwords you have entered do not match.";
	} else {
		document.getElementById("password").style.backgroundColor = "white";
		document.getElementById("confirmpw").style.backgroundColor = "white";
	}
	
	document.getElementById("validation").innerHTML = error;	
}

function checkPhone() {
	var phone = document.getElementById("phone").value;
	var error = "";
	
	if (phone=="") {
		document.getElementById("phone").style.backgroundColor = "yellow";
		error = "Please enter your phone number.";
	} else if (!phone.match(/[+]?[1]?[-.\s]?[0-9]{3}[-.\s]?[0-9]{3}[-.\s]?[0-9]{4}/)) {
		document.getElementById("phone").style.backgroundColor = "yellow";
		error = "This is not a valid phone number.";
	} else {
		document.getElementById("phone").style.backgroundColor = "white";
	}
	
	document.getElementById("validation").innerHTML = error;	
}
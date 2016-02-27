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
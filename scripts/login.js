var tries = 3;

function validate(){
	var email = document.getElementById("email").value;
	var password = document.getElementById("pwd").value;
	if (email == "rihards@gmail.com" && password == "74700357") {
		alert("Login successfully");
		window.location = "index.php";
		return false;
	}
	else{
		attempt--;
		alert("У вас осталось " + tries + " попыток");
	if (attempt == 0) {
		document.getElementById("email").disabled = true;
		document.getElementById("pwd").disabled = true;
		document.getElementById("submit").disabled = true;

	}
	}
}
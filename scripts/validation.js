function validateForm(){
	var x = document.forms["myForm"]["name"].value;
	var s = document.forms["myForm"]["surname"].value;
	var u = document.forms["myForm"]["username"].value;
	var p = document.forms["myForm"]["password"].value;
	var e = document.forms["myForm"]["email"].value;
	if (x == "" || s == "" || u == "" || p == "" || e == "") {
		alert("Введите данные.");
		return false;
	}
}
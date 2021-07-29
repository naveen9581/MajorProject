var email = document.forms['form']['user'];
var password = document.forms['form']['password'];


var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

function validated(){
	if (email.value.lenght < 9){
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus()
		return false;
	}
	if (password.value.lenght < 9){
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus()
		return false;
	}
}


<?php include('server.php'); ?>




<!DOCTYPE html>
<html>
<head>
	<title>Tasty Grillz</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
</head>
<body>
	<h1>You will redirect to home page if and only if your credentials are valid.</h1>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
					<div class="form-login">
						<form id="loginform" method="post" action="login.php">
							<input type="text" name="user" placeholder="Username">
							<input type="password" name="password" placeholder="Password">
							<button type="submit" class="btn">Login</button>
						</form>
				    </div>

				    <div class="form-reg">
						<form id="regform" class="form-reg" method="post" action="registration.php">
							<input type="text" name="user" placeholder="Username">
							<input type="email" name="email" placeholder="Email">
							<input type="password" name="password" placeholder="Password">
							<button type="submit" class="btn">Register</button>
						</form>
					</div>	
				</div>
			</div>
		</div>
		
	</div>

	<script type="text/javascript">
		var loginform = document.getElementById("loginform");
		var regform = document.getElementById("regform");
		var Indicator = document.getElementById("Indicator");

		function register(){
			regform.style.transform = "translateX(0px)";
			loginform.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(135px)";
		}

		function login(){
			regform.style.transform = "translateX(345px)";
			loginform.style.transform = "translateX(345px)";
			Indicator.style.transform = "translateX(10px)";
		}
	</script>


</body> 

</html>





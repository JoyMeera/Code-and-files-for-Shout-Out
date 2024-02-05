<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>Administrator Login</title>
		<link href="adminstyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Admin Login-->
		<!--Referenced website : https://codeshack.io/secure-login-system-php-mysql/-->
		<div class="bg-image"></div>
		<div class="login">
			<h1>Administrator Login</h1>
			<form action="admin_authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
		<!--Handling login fails-->
				<?php
		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl,"login=error")== TRUE)
		{
			$message = "Incorrect username and/or password!";
			echo '<h5 class = "errormessage">'.$message.'</h5>';
		}
		elseif (strpos($fullUrl,"login=incomplete")== TRUE)
		{
			$message = "Please enter username and password!";
			echo '<h5 class="errormessage">'.$message.'</h5>';
		}
	?>
				<input type="submit" value="Login">
			</form >
		</div>
	</body>
</html>
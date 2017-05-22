<head>
<link href="signup.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="top style">
<?php echo "Congratulation You are a register user now."; ?>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 first"></div>
		<div class="col-md-4 second">
			<div class="middle">Login Now</div>
		<form action="loginaction.php" method="POST">
			<table class="table">
			<tr>
				<td class="log">Username:</td>
				<td class="log"><input type= "text" name="user"></td>
			</tr>
			<tr>
				<td class="log">Password:</td><td class="log"><input type= "text" name="pass"></td>
			</tr>
			<tr>
				<td class="log"></td><td class="log"><input type="submit"></td>
			</tr>
			</table>
		</form>
		</div>
		<div class="col-md-4 third"></div>
	</div>
</div>
</body>
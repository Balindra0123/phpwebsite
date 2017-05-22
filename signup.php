<head>
<link href="signup.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="top"><h1 id="on">Registration Form</h1></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 first"></div>
<div class="col-md-4 second">
<form action="signupaction.php" method="POST">
<table class="table">
<tr>
<td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="lname"></td>
</tr>
<tr>
<td>User Id:</td><td><input type="text" name="user_id"></td>
</tr>
<tr>
<td>Password:</td><td><input type="text" name="pass"></td>
</tr>
<tr>
<td>Location:</td><td><input type="text" name="location"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Submit</button></td>
</tr>
</table>
</form></div>
<div class="col-md-4 third"></div></div></div>
</body>
 <!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <meta name ="viewport" content="width=device-width, initial-scale=1" /><meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/homepage.css"/>
  <style>

  body {background-color: #white;}
  </style>
</head>
<body>
	<div class = "topnav">
		

		<div class = "topnav-right">
		    <a href="homepage.html">Home</a>
			<a href="signup.php">Register</a>
			<a href="signin.php">Login</a>
		</div>
	</div>
	
	
	<div class = "row">
		<div class = "content">
			<h2>Register Here</h2>
			<form action="processes/user_processes.php"method = "POST">
				<div>
				<p>Please fill in this form to create an account.</p>
					<label for = "">Fullname: </label>
					<input type = "text" name = "fullname" placeholder=" Your fullname" required autofocus />
				</div>
				<div>
					<label for = "">Username: </label>
					<input type = "text" name = "username" placeholder=" Your username" required />
				</div>
				<div>
					<label for = "">Email: </label><br />
					<input type = "email" name = "email" placeholder=" Your email" required />
				</div>
				<div>
					<label for = "">Phonenumber: </label>
					<input type = "text" name = "phonenumber" placeholder=" Your phonenumber" required />
				</div>
				<div>
					<label for = "">Password: </label>
					<input type = "password" name = "password" placeholder=" Your password" required />
				</div>
				<div>
					<label for = "">Confirmpassword: </label>
					<input type = "password" name = "ConfPass" placeholder=" Confirm password" required />
				</div>
				<div>
					<select name = "userType" required>
            <option value = "">----Please Select User Type----</option>
            <option value = "Admin">Admin</option>
            <option value = "Parent">Parent</option>
            <option value = "Nurse">Nurse</option>
          </select>
			</div>
			<div>
				<input type = "submit" name = "signup" value = "Register" />
				<button type="button" class="cancelbtn">Cancel</button>
			</div>
			</form>
		</div>
	</div>
	
</body>
</html>
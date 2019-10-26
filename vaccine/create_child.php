<?php
    session_start();
    require_once "config/dbConnect.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.child {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
   max-width: 550px;
    border-radius: 20px;
    margin: auto;
    background: black;
    box-sizing: border box;
    padding: 40px;
    color: white;
    margin top: 100px;
    float: center;
    width: 66.66%;
    padding: 40px;  
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Child's Registration Form</h2>

<form action="processes/s_processes.php" method="post">
  <div class="imgcontainer">
   <img src= "images/child.jpg" alt="child" class="child">
  </div>

  <div class="container">
    <label for="Fname"><b>FirstName</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
	 <label for="Lname"><b>LastName</b></label>
	<input type="text" placeholder="Enter Last Name" name="lastname" required>	
	<label for="hospname"><b>Hospital</b></label>
    <input type="text" placeholder="Enter Hospital name" name="hospitalname" required>	

    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter Date of Birth" name="dateofbirth" required></br>
	
	
	<label for="gender"><b>Gender :</b></label>
     <input type="radio" name="gender" value="Female" checked="true"/> Female
	 
	 <input type="radio" name="gender" value="Male"/> Male<br/></br>
	 
	
        
    <button type="submit" name = "child">Register</button>
	<button type="button" class="cancelbtn">Cancel</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

</body>
</html>

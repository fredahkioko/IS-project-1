<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">

        <a href="./">Home</a>
        <a href="">About us</a>
        <a href="">Search</a>
        <a href="contactus.html">Contact Us</a>
        <a href="lecturer.php">Track Immunization</a>
        <a href="articlescreate.php">create notification</a>
        
         <div class="dropdown">
         <button class="dropbtn">Register Child
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="create_child.php">Add new child</a>
      <a href="#">update child details</a>
      <a href="#">delete child details</a>
	  <a href="#">view child details</a>
    </div>
  </div> 
  <div class = "topnav-right">
                <a href = "" >Welcome <?php print $_SESSION["control"]["username"]; ?></a>
                <a href = "processes/user_processes.php?signout">Sign Out</a>
            </div>
        </div>
</div>
 </div>

          

</body>
</html>

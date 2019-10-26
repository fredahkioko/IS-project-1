<?php
    session_start();
    require_once "config/dbConnect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/homepage.css" />
		<style>
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
			
		</style>
		
    </head>
    <?php require_once "top_navnurse.php"; ?>
        <div class="imgcontainer">
    <img src= "images/nurse.jpg" alt="child" class="child">
  </div>


  </body>  
  </html>       
           
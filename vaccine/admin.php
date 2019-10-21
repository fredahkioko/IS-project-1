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
    </head>
    <?php require_once "top_navadmin.php"; ?>
        <div class = "header">
            <h1>IMMUNIZATION TRACKING SYSTEM)</h1>
        </div>

        <div class = "row">
          <div class = "content1">
             <h1>This is the ADMIN PAGE accessed by the Admin Only!!</h1>
          </div>
         </div>
        <div class = "footer" >
            <h3>Copyright &copy; Immunization Tracking system</h3>
        </div>

  </body>  
  </html>       
           
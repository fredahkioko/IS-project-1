<?php
    session_start();
    require_once "config/dbConnect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>New Member creation Page</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/homepage.css" />
         <style>#wrap{
    width:1400px;
    margin:0 auto;
    padding:5px;
    border-radius:10px; 
    border:10px solid #3d3d3d;
    float:center;
    background:black;
}</style>
    </head>
    <body>
   <?php require_once "top_navadmin.php"; ?>
        <div class = "header">
            <h1>IMMUNIZATION TRACKING SYSTEM</h1>
        </div>
        <div id ="content">
            <div id ="wrap">
            <form action= "processes/user_processes.php" method = "POST">
              <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th> BCG </th>
                    <td> <input type = "text" name = "fullname" placeholder=" Your fullname" required autofocus /></td> 
                </tr>
                <tr>
                    <th> DPT </th>
                    <td> <input type = "text" name = "username" placeholder=" Your username" required /></td> 
                </tr>
                <tr>
                    <th> Email </th>
                    <td> <input type = "email" name = "email" placeholder=" Your email" required /></td> 
                </tr>
                <tr>
                    <th> Phonenumber </th>
                    <td> <input type = "text" name = "phonenumber" placeholder=" Your phonenumber" required /></td> 
                </tr>
                <tr>
                    <th> Password </th>
                    <td> <input type = "password" name = "password" placeholder=" Your password" required /></td> 
                </tr>
                <tr>
                    <th> Confirmpassword </th>
                    <td> <input type = "password" name = "ConfPass" placeholder=" Confirm password" required /></td> 
                </tr>
                <tr>
                    <th> userType </th>
                    <td> <select name = "userType" required>
            <option value = "">----Please Select User Type----</option>
            <option value = "Parent">Parent</option>
            <option value = "Nurse">Nurse</option>
          </select>
            </td> 
                </tr>
                <div>
                <tr>
                    <td><input type = "submit" name = "save" value = "SAVE"></td>
                    <td><a href = "view.php"><input type = "submit" name = "back"value = "BACK"> </a></td>
                </tr>
            </div>
              </table>
            </form>
            <?php
         if(!isset($_GET['admin'])){
            exit();
        }
        else{
            $adminCheck=$_GET['admin'];

            if($adminCheck=="success"){
            echo"<p userId='success'>Member created successfully;Press BACK and click on VIEW USERS</p>";
            exit();
            }
        }     
     ?>
        </div>
        <div class = "footer" >
            <h3>Copyright &copy; Immunization Tracking System</h3>
        </div>

  </body>  
  </html>       
           
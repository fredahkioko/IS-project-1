<?php
//start session service
session_start();
//Importing database connection
require_once "../config/dbConnect.php";
//signup process
if (isset($_POST["signup"])) {
    //variable declaration
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $phonenumber = mysqli_real_escape_string($dbConn, $_POST["phonenumber"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $ConfPass = mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
    $userType = mysqli_real_escape_string($dbConn, $_POST["userType"]);
    //verifying if the password and confirm password are the same
    if ($password != $ConfPass) {
        header("Location: ../signin.php?signup=Password error");
        exit();
    } 
    //encrypting password
    $hash_password = password_hash($ConfPass, PASSWORD_DEFAULT);
    //inserting data innto users table
    $user_insert = "INSERT INTO users(fullname, username, email, phonenumber, password, userType)VALUES('$fullname', '$username', '$email', '$phonenumber', '$hash_password', '$userType')";
    //executing the sql query
    if($dbConn->query($user_insert) === TRUE){
        header("Location: ../signin.php?signup=success");
            exit();
            }else{
                die("Registration Failed:  <br />" .$dbConn->error);
            }
    }
    //signin process
    if(isset($_POST["signin"])){
        //variable declaration
    $entered_email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    //verify if username matches any record
    $spot_email = "SELECT * FROM users WHERE email = '$entered_email' LIMIT 1";
    //executing the select query
    $uName_res = $dbConn->query($spot_email);
    //count atleast one matching row
    if($uName_res->num_rows > 0){
        //session
        $_SESSION["control"] = $uName_res->fetch_assoc();
        //fetching stored password with session
        $stored_password = $_SESSION["control"]["password"];
        $userType = $_SESSION["control"]["userType"];
        //verify if entered password is identical to the stored password
        if (password_verify($entered_password, $stored_password)) {
            if($userType == "Admin"){
                    header("Location: ../admin.php");
                    exit();
                }else if($userType == "Parent"){
                    header("Location: ../parent.php");
                    exit();
                }else if($userType == "Nurse"){
                    header("Location: ../nurse.php");
                    exit();
                }
              }
            }else{
                unset($_SESSION["control"]);
                header("Location: ../signin.php?signup=Credentials error");
                exit();
            }
            
        }
//signout process
if (isset($_GET["signout"])) {
            unset($_SESSION["control"]);
            session_destroy();
            header("Location: ../signin.php");
            exit();
}
if (isset($_POST["save"])) {
    //variable declaration
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $phonenumber = mysqli_real_escape_string($dbConn, $_POST["phonenumber"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $ConfPass = mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
    $userType = mysqli_real_escape_string($dbConn, $_POST["userType"]);
    //verifying if the password and confirm password are the same
    if ($password != $ConfPass) {
        header("Location: ../signup.php?signup=Password error");
        exit();
    } 
    //encrypting password
    $hash_password = password_hash($ConfPass, PASSWORD_DEFAULT);
    //inserting data innto users table
    $user_insert = "INSERT INTO users(fullname, username, email, phonenumber, password, userType)VALUES('$fullname', '$username', '$email', '$phonenumber', '$hash_password', '$userType')";
    //executing the sql query
    if($dbConn->query($user_insert) === TRUE){
        header("Location: ../create.php?signup=success");
            exit();
            }else{
                die("User creation Failed:  <br />" .$dbConn->error);
            }
    }

    
if(isset($_POST['update'])){   
    //variable declaration.
    $userId = $_GET['userId'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $userType = $_POST['userType'];  
    
        //updating the table
        $result = "UPDATE users SET fullname='$fullname', username='$username', email='$email', phonenumber='$phonenumber', userType='$userType' WHERE userId=$userId";
        
        //redirectig to the display page.
        if(mysqli_query($dbConn, $result)){
            header("Location: ../view.php?update=success");
            exit();
        } else {
            die("User Update failed: <br /> " .$dbConn->error);
        }
}
if(isset($_POST['savechanges'])){
    
        $del= "DELETE FROM users WHERE userId=" . $_POST['userId']."";
        
        //redirectig to the display page.
        if($dbConn->query($del) === TRUE){
            header("Location: ../view.php?delete=success");
            exit();
        } else {
            die("User Deletion failed: <br /> " .$dbConn->error);
        }
}
?>
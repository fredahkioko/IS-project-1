<?php
//start session service
session_start();
//Importing database connection
require_once "../config/dbConnect.php";

//signup process
if (isset($_POST["child"])) {
    //variable declaration
    $firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($dbConn, $_POST["lastname"]);
    $hospitalname= mysqli_real_escape_string($dbConn, $_POST["hospitalname"]);
    $dateofbirth = mysqli_real_escape_string($dbConn, $_POST["dateofbirth"]);
    $gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
	
	 //inserting data into users table
    $child_insert = "INSERT INTO children(firstname, lastname,hospitalname,dateofbirth, gender)VALUES('$firstname', '$lastname', '$hospitalname', '$dateofbirth','$gender')";
       //executing the sql query
    if($dbConn->query($child_insert) === TRUE){
$last_id = $dbConn->insert_id;
		
		$three_m = $dateofbirth + 3;
		$three_m = $dateofbirth + 3;
		$three_m = $dateofbirth + 3;
		
        header("Location: ../view_child.php?signup=success");
            exit();
            }else{
                die("Registration Failed:  <br />" .$dbConn->error);
            }
    } 
	//signout process
if (isset($_GET["signout"])) {
            unset($_SESSION["control"]);
            session_destroy();
            header("Location: ../childreg.php");
            exit();
}
if (isset($_POST["save"])) {
    //variable declaration
    $firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($dbConn, $_POST["lastname"]);
    $hospitalname= mysqli_real_escape_string($dbConn, $_POST["hospitalname"]);
    $dateofbirth = mysqli_real_escape_string($dbConn, $_POST["dateofbirth"]);
    $gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
    
     //inserting data into users table
    $child_insert = "INSERT INTO children(firstname, lastname,hospitalname,dateofbirth, gender)VALUES('$firstname', '$lastname', '$hospitalname', '$dateofbirth','$gender')";
       //executing the sql query
    if($dbConn->query($child_insert) === TRUE){
        header("Location: ../view_child.php?signup=success");
            exit();
            }else{
                die("Registration Failed:  <br />" .$dbConn->error);
            }
    } 
    
if(isset($_POST['update'])){   
    //variable declaration.
    $childId = $_GET['childId'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $hospitalname = $_POST['hospitalname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];  
    
        //updating the table
        $result = "UPDATE children SET firstname='$firstname', lastname='$lastname', hospitalname='$hospitalname', dateofbirth='$dateofbirth', gender='$gender' WHERE childId=$childId";
        
        //redirectig to the display page.
        if(mysqli_query($dbConn, $result)){
            header("Location: ../view_child.php?update=success");
            exit();
        } else {
            die("User Update failed: <br /> " .$dbConn->error);
        }
}
if(isset($_POST['savechanges'])){
    
        $del= "DELETE FROM children WHERE childId=" . $_POST['childId']."";
        
        //redirectig to the display page.
        if($dbConn->query($del) === TRUE){
            header("Location: ../view_child.php?delete=success");
            exit();
        } else {
            die("User Deletion failed: <br /> " .$dbConn->error);
        }
}

?>
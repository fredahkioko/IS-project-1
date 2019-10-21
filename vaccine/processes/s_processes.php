<?php/*
//start session service
session_start();
//Importing database connection
require_once "../config/dbConnect.php";

if(isset($_POST['update'])){   
    //variable declaration.
    $articleId = $_GET['articleId'];
    $articletitle = $_POST['articletitle']; 
    $articlefulltext = $_POST['articlefulltext']; 
    
        //updating the table
        $result = "UPDATE articles SET articletitle='$articletitle', articlefulltext='$articlefulltext' WHERE articleId=$articleId";
        
        //redirectig to the display page.
        if(mysqli_query($dbConn, $result)){
            header("Location: ../editorsview.php?articlesupdate=success");
            exit();
        } else {
            die("Articles Update failed: <br /> " .$dbConn->error);
        }
}*/
?>
<?php
//start session service
session_start();
//Importing database connection
require_once "../config/dbConnect.php";

if (isset($_POST["save"])) {
    //variable declaration
    $articletitle = mysqli_real_escape_string($dbConn, $_POST["articletitle"]);
     $articlefulltext = mysqli_real_escape_string($dbConn, $_POST["articlefulltext"]);
      $articlepublicationdate = mysqli_real_escape_string($dbConn, $_POST["articlepublicationdate"]);
    
    //inserting data innto rooms table
    $article_insert = "INSERT INTO articles(articletitle, articlefulltext, articlepublicationdate)VALUES('$articletitle', '$articlefulltext', '$articlepublicationdate')";
    //executing the sql query
    if($dbConn->query($article_insert) === TRUE){
        header("Location: ../articlescreate.php? = create=success");
            exit();
            }else{
                die("Article creation Failed:  <br />" .$dbConn->error);
            }
    }

if(isset($_POST['update'])){   
    //variable declaration.
    $articleId = $_GET['articleId'];
    $articletitle = $_POST['articletitle']; 
    $articlefulltext = $_POST['articlefulltext']; 
    $articlepublicationdate = $_POST['articlepublicationdate']; 
    
    
        //updating the table
        $result = "UPDATE articles SET articletitle='$articletitle', articlefulltext='$articlefulltext', articlepublicationdate='$articlepublicationdate' WHERE articleId=$articleId";
        
        //redirectig to the display page.
        if(mysqli_query($dbConn, $result)){
            header("Location: ../articlesview.php?articlesupdate=success");
            exit();
        } else {
            die("Articles Update failed: <br /> " .$dbConn->error);
        }
}
if(isset($_POST['savechanges'])){
    
        $del= "DELETE FROM articles WHERE articleId=" . $_POST['articleId']."";
        
        //redirectig to the display page.
        if($dbConn->query($del) === TRUE){
            header("Location: ../articlesview.php?articlesdelete=success");
            exit();
        } else {
            die("Article Deletion failed: <br /> " .$dbConn->error);
        }
}
?>
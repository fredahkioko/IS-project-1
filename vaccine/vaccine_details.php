<?php/*
    session_start();
    require_once "config/dbConnect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>New Article Creation Page</title>
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
   <?php require_once "top_navauthor.php"; ?>
        <div class = "header">
            <h1>Online Writings (ewrite)</h1>
        </div>
        <div id ="content">
            <div id ="wrap">
            <form action= "processes/author_processes.php" method = "POST">
              <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th> ArticleTitle </th>
                    <td> <input type = "text" name = "articletitle" placeholder=" Enter Article Title" required autofocus /></td> 
                </tr>
                <tr>
                    <th> ArticleFullText </th>
                    <td> <textarea  rows="2" cols="200" style="width:1200px !important;height:700px !important;"name = "articlefulltext" Placeholder = "Type your Article Text Here" required ></textarea></td> 
                </tr>
                <tr>
                    <th> ArticlePublicationDate </th>
                    <td> <input type = "date" name = "articlepublicationdate" placeholder=" Article Publication Date" required /></td> 
                </tr>
                <div>
                <tr>
                    <td><input type = "submit" name = "save" value = "SAVE"></td>
                    <td><a href = "articlesview.php"><input type = "submit" name = "back"value = "BACK"> </a></td>
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
            echo"<p articleId='success'>Article created successfully;Press BACK and click on View Articles</p>";
            exit();
            }
        }     
     ?>
        </div>
        <div class = "footer" >
            <h3>Copyright &copy; Online Writings (ewrite)2019</h3>
        </div>

  </body>  
  </html> */      
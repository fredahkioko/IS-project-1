<?php
    session_start();
    require_once "config/dbConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Page</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/homepage.css" />
    </head>
    <body>
        <?php require_once "top_navauthor.php"; ?>
        <div class = "header">
            <h1>Online Writings (ewrite)</h1>
        </div>
<?php
if(isset($_POST['viewArticle'])){
  $search_result = mysqli_query($dbConn, "SELECT * FROM articles WHERE articleId=" . $_POST['articleId']);
  while($res = mysqli_fetch_array($search_result))
  {
    $articleId = $res['articleId'];
    $articletitle = $res['articletitle'];
    $articlefulltext = $res['articlefulltext'];
    $articlepublicationdate = $res['articlepublicationdate'];

  }
}
?>
<html>
<head>
  <link rel = "stylesheet" href = "css/homepage.css" /> 
  <style>
table{
    width:50%;
    margin-top:10px;
}
table tr th{
  padding-top:20px;
}
#wrap{
    width:1400px;
    margin:0 auto;
    padding:5px;
    border-radius:10px; 
    border:10px solid #3d3d3d;
    float:center;
    background:black;
}
  </style>
</head>
<body>
  <div id = "wrap">
  <form action= "processes/author_processes.php?articleId=<?php echo $articleId; ?>" method = "POST">
    <table border="1" cellpadding="0" cellspacing="0">
      <tr> 
        <td>articletitle</td>
        <td><input type="text" name="articletitle" value="<?php echo $articletitle;?>"></td>
      </tr>
      <tr> 
        <td>articlefulltext</td>
       <td> <input type="text" rows="2" cols="200" style="width:1200px !important;height:700px !important;" name = "articlefulltext" value="<?php echo $articlefulltext;?>"></input></td>
      </tr>
      <tr> 
        <td>articlepublicationdate</td>
        <td><input type="date" name="articlepublicationdate" value="<?php echo $articlepublicationdate;?>"></td>
      </tr>

      <tr>
        <td><a href = "articlesview.php"><input type="submit" name="update" value="UPDATE"></td></a>
      </tr>
    </table>
  </form>
  <?php
         if(!isset($_GET['update'])){
            exit();
        }
        else{
            $updateCheck=$_GET['update'];

            if($updateCheck=="success"){
            echo"<p articleId='success'>Article updated successfully</p>";
            exit();
            }
        }     
     ?>
 </div>
</body>
</html>

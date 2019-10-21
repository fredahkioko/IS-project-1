<?php/
    session_start();
    require_once "config/dbConnect.php";
    $mysqli_result = mysqli_query($dbConn,"SELECT * FROM children");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> 
		</title>
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
    <?php require_once "top_naveditor.php"; ?>
        <div class = "header">
            <h1>Online Writings (ewrite)</h1>
        </div>
    <div id = "wrap">
       <div class="">
        <table border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>ArticleId</th>
              <th>ArticleTitle</th>
              <th>ArticleFullText</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_array($mysqli_result)) { ?>
                   <tr>
                      <td><?php echo $row['articleId']; ?></td>
                      <td><?php echo $row['articletitle']; ?></td>
                      <td><?php echo $row['articlefulltext']; ?></td>
                      <td>
                          <a href = "articlesupdate.php">
                            <form action = "./articlesupdate.php" method="POST">
                              <?php echo '<input value="'.$row['articleId'].'" name="articleId" hidden>'; ?><input type = "submit" name = "viewArticle" value = "UPDATE">
                            </form>                            
                          </a>
                      </td>
                  </tr>
            <?php } ?>
          </tbody>

        </table>
    </div>
</div>
  </body>  
  </html>
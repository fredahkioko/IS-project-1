<?php
    session_start();
    require_once "config/dbConnect.php";
    $mysqli_result = mysqli_query($dbConn,"SELECT * FROM children");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View child Details</title>
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
    background:white;
}</style>
    </head>
    <body>
<?php require_once "top_navchild.php"; ?>
        
    <div id = "wrap">
       <div class="">
        <table border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>childId</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Hospitalname</th>
              <th>Dateofbirth</th>
              <th>Gender</th>
            
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_array($mysqli_result)) { ?>
                   <tr>
                      <td><?php echo $row['childId']; ?></td>
                      <td><?php echo $row['firstname']; ?></td>
                      <td><?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['hospitalname']; ?></td>
                      <td><?php echo $row['dateofbirth']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td>
                          <a href = "update_child.php">
                            <form action = "./update_child.php" method="POST">
                              <?php echo '<input value="'.$row['childId'].'" name="childId" hidden>'; ?><input type = "submit" name = "viewChild" value = "UPDATE">
                            </form>                            
                          </a>
                      </td>
                      <td>
                          <a href = "delete_child.php">
                            <form action = "./delete_child.php" method="POST">
                              <?php echo '<input value="'.$row['childId'].'" name="childId" hidden>'; ?><input type = "submit" name = "viewDel" value = "DELETE">
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
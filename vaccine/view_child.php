<?php
    session_start();
    require_once "config/dbConnect.php";
    $mysqli_result = mysqli_query($dbConn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Users View Page</title>
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
<?php require_once "top_navadmin.php"; ?>
        <div class = "header">
            <h1>IMMUNIZATION TRACKING SYSTEM</h1>
        </div>
    <div id = "wrap">
       <div class="">
        <table border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>UserId</th>
              <th>Fullname</th>
              <th>Username</th>
              <th>Email</th>
              <th>Phonenumber</th>
              <th>userType</th>
            
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_array($mysqli_result)) { ?>
                   <tr>
                      <td><?php echo $row['userId']; ?></td>
                      <td><?php echo $row['fullname']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phonenumber']; ?></td>
                      <td><?php echo $row['userType']; ?></td>
                      <td>
                          <a href = "update.php">
                            <form action = "./update.php" method="POST">
                              <?php echo '<input value="'.$row['userId'].'" name="userId" hidden>'; ?><input type = "submit" name = "viewUser" value = "UPDATE">
                            </form>                            
                          </a>
                      </td>
                      <td>
                          <a href = "delete.php">
                            <form action = "./delete.php" method="POST">
                              <?php echo '<input value="'.$row['userId'].'" name="userId" hidden>'; ?><input type = "submit" name = "viewDel" value = "DELETE">
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
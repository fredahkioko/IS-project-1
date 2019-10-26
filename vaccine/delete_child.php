<?php
    session_start();
    require_once "config/dbConnect.php";
?>

<?php
if(isset($_POST['viewDel'])){
    $search_result = mysqli_query($dbConn, "SELECT * FROM children WHERE childId=" . $_POST['childId']);
    while($res = mysqli_fetch_array($search_result))
    {
        $childId = $res['childId'];
        $firstname = $res['firstname'];
        $lastname = $res['lastname'];
        $hospialname = $res['hospitalname'];
        $dateofbirth = $res['dateofbirth'];
        $gender = $res['gender'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Delete Child Details</title
        <link rel = "stylesheet" href = "css/homepage.css" /> 
    </head> 
    <body>
        <div id = "content">
            <h3>Are you sure you want to delete this details? </h3>
            <form action="processes/s_processes.php?childId=<?php echo $childId; ?>" method = "POST">
                <input type="hidden" name="userId" value="<?php echo $childId; ?>"/>
                <input type = "submit" name = "savechanges" value = "Yes"></a>
                <a href = "view_child.php"><input type = "submit" name="back" value = "NO"> </a>
            </form>
        </div>
    </body>  
</html>
    <?php
         if(!isset($_GET['delete'])){
            exit();
        }
        else{
            $deleteCheck=$_GET['delete'];

            if($deleteCheck=="success"){
            echo"<p childId='success'>User updated successfully</p>";
            exit();
            }
        }     
     ?>
 </div>
</body>
</html>

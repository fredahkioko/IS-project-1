<?php
    session_start();
    require_once "config/dbConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add child</title>
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
        
<?php
if(isset($_POST['viewUser'])){
	$search_result = mysqli_query($dbConn, "SELECT * FROM children WHERE childId=" . $_POST['childId']);
	while($res = mysqli_fetch_array($search_result))
	{
		$chidId = $res['childId'];
        $firstname = $res['firstname'];
		$lastname = $res['lastname'];
        $hospitalname = $res['hospitalname'];
        $dateofbirth = $res['dateofbirth'];
		$gender = $res['gender'];
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
  </style>
</head>
<body>
	<div id = "wrap">
	<form action= "processes/s_processes.php?childId=<?php echo $childId; ?>" method = "POST">
		<table border="1" cellpadding="0" cellspacing="0">
			<tr> 
				<td>firstname</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>lastname</td>
				<td><input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr> 
				<td>Hospital name</td>
				<td><input type="email" name="hospitalname" value="<?php echo $hospitalname;?>"></td>
			</tr>
			<tr> 
				<td>Date of Birth</td>
				<td><input type="text" name="dateofbirth" value="<?php echo $dateofbirth;?>"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				            	<td><select name="gender" value="<?php echo $gender;?>">
            <label for="gender"><b>Gender :</b></label>
     <input type="radio" name="gender" value="Female" checked="true"/> Female
	 
	 <input type="radio" name="gender" value="Male"/> Male<br/></br>
	 
          </select></td>
			</tr>
			<tr>
				<td><a href = "view_child.php"><input type="submit" name="update" value="UPDATE"></td></a>
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
            echo"<p childId='success'>User updated successfully</p>";
            exit();
            }
        }     
     ?>
 </div>
</body>
</html>

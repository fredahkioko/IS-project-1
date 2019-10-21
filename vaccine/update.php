<?php
    session_start();
    require_once "config/dbConnect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Member creation Page</title>
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
        <?php require_once "top_navadmin.php"; ?>
        <div class = "header">
            <h1>IMMUNIZATION TRACKING SYSTEM</h1>
        </div>
<?php
if(isset($_POST['viewUser'])){
	$search_result = mysqli_query($dbConn, "SELECT * FROM users WHERE userId=" . $_POST['userId']);
	while($res = mysqli_fetch_array($search_result))
	{
		$userId = $res['userId'];
        $fullname = $res['fullname'];
		$username = $res['username'];
        $email = $res['email'];
        $phonenumber = $res['phonenumber'];
		$userType = $res['userType'];
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
	<form action= "processes/user_processes.php?userId=<?php echo $userId; ?>" method = "POST">
		<table border="1" cellpadding="0" cellspacing="0">
			<tr> 
				<td>fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $fullname;?>"></td>
			</tr>
			<tr> 
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><input type="email" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>phonenumber</td>
				<td><input type="text" name="phonenumber" value="<?php echo $phonenumber;?>"></td>
			</tr>
			<tr> 
				<td>userType</td>
            	<td><select name="userType" value="<?php echo $userType;?>">
            <option value = "">----Please Select User Type----</option>
            <option value = "parent">Parent</option>
            <option value = "nurse">Nurse</option>
          </select></td>
			</tr>
			<tr>
				<td><a href = "view.php"><input type="submit" name="update" value="UPDATE"></td></a>
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
            echo"<p userId='success'>User updated successfully</p>";
            exit();
            }
        }     
     ?>
 </div>
</body>
</html>

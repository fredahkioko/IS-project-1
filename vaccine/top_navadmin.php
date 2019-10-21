       <div class = "topnav">
        <a href="./">Home</a>
        <a href="">About us</a>
        <a href="">Search</a>
        <a href="contactus.html">Contact Us</a>
   <a href="admin.php">Control Panel</a>
       <a href="create.php">Add Users</a>
    <a href="view.php">View Users</a>

            <div class = "topnav-right">
                <a href = "" >Welcome <?php print $_SESSION["control"]["username"]; ?></a>
                <a href = "processes/user_processes.php?signout">Sign Out</a>
            </div>
        </div>
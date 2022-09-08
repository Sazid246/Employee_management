<?php
session_start();
$uname=$_SESSION["user"];
if($_SESSION["user"]==false)
{
	header("location:emplogin.php");
}
else
{
	echo "Welcome superadmin ".$uname;
}

?>
<br><a href="superlogout.php">Logout</a>

<br><a href="superdisplay.php">Display</a>
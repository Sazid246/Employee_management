<?php
session_start();
$uname=$_SESSION["user"];
if($_SESSION["user"]==false)
{
	header("location:emplogin.php");
}
else
{
	echo "Welcome admin ".$uname;
}

?>
<br>
<a href="adminlogout.php">Logout</a><br>
<a href="admindisplay.php">Display All POsts</a>
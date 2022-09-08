<?php
session_start();
$uname=$_SESSION["user"];
if($_SESSION["user"]==false)
{
	header("location:emplogin.php");
}
else
{
	echo "Welcome ".$uname;
}

?>
<a href="postprofile.php">Post</a>
<a href="displaypostprofile.php">Display post</a>
<br>
<a href="userlogout.php">Logout</a>
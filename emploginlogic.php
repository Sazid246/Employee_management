<?php
session_start();
$user=$_POST["uname"];
$pass=$_POST["pass"];
$conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
$query="select * from emplogin where username='$user'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
	$dbuser=$row["username"];
	$dbpass=$row["password"];
	$dbaccess=$row["access"];
	$_SESSION["user"]=$dbuser;
}
if($user==$dbuser && $pass==$dbpass)
{
	if($dbaccess=="super")
	{
		header("location:superprofile.php");
	}
	else if($dbaccess=="admin")
	{
		header("location:adminprofile.php");
	}
	else
	{
		header("location:userprofile.php");
	}
}
else
{
	echo "error";
}
?>
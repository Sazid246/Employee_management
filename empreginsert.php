<?php
$name=$_POST["uname"];
$pass=$_POST["pass"];
$conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
echo $query="insert into emplogin(username,password) values('$name','$pass')";
$res=mysqli_query($conn,$query);
if($res)
{
	header("location:emplogin.php");
}
else
{
	echo "Registration Fail";
}
?>
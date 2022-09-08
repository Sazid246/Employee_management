<?php
session_start();
$user=$_SESSION["user"];
$name=$_POST["pn"];
$degree=$_POST["pd"];
$salary=$_POST["ps"];
$date=date('y-m-d');
$conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
$query="insert into empposts(pdate,pname,pdegree,psalary) values('$date','$name','$degree','$salary')";
$res=mysqli_query($conn,$query);
if($res)
{
	header("location:userprofile.php");
}
else
{
	echo "Error";
}

?>
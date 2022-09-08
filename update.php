<?php
$pid=$_POST['h'];
$pdate=$_POST['p'];
$pname=$_POST['n'];
$pdegree=$_POST['d'];
$psalary=$_POST['s'];

$conn=mysqli_connect( "localhost","root","","duiet") or die ("unable to connect with the database.");
$query="update empposts set pdate= '$pdate',pname= '$pname',pdegree= '$pdegree',psalary='$psalary;' WHERE pid='$pid'";
$res=mysqli_query($conn,$query);
if($res){
	echo "Result updated";
		
	header("location:displaypostprofile.php");
}else{
	echo "update failed";
}

?>
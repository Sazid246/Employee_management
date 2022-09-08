<?php
$pid=$_GET['id'];
$conn=mysqli_connect( "localhost","root","","duiet") or die ("unable to connect with the database.");
$query="delete from empposts where pid='$pid'";
$res=mysqli_query($conn,$query);
if ($res) {
	header("location:displaypostprofile.php");
}else{
	echo "There is an error";
	
	?> <a href="displaypostprofile.php"> Return to form display</a>;
	<?php  
}
?>
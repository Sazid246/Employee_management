<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost", "root","","duiet") or die ( "database connection error");
         $query= "update empposts set status='1' where pid='$id'";
         $res= mysqli_query($conn,$query);
         if($res){
         	header("location:admindisplay.php");
         }else{
         	header("location:adminprofile.php");
         }
?>
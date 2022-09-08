<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
   echo $query="update empposts set status='-1' where pid ='$id'";
    $res=mysqli_query($conn,$query);
    if ($res)
    {
        header("location:superdisplay.php");
    }
    else
    {
        header("location:superprofile.php");
    }
    ?>
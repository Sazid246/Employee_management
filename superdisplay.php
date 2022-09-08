<table border="2">
    <tr>  
    <th>ID</th> 
    <th>Date</th>
    <th>Name</th>
    <th>Degree</th> 
    <th>Salary</th>
    <th>Action</th>
    

    </tr>
<?php
    $conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
    $query="select * from empposts where status='1'";
    $res=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($res))
    {   
        $dbid=$row["pid"];
        $dbdate=$row["pdate"];
        $dbpostname=$row["pname"];
        $dbpostdegree=$row["pdegree"];
        $dbpostsalary=$row["psalary"];
        $status=$row["status"];

        ?>
        
        <tr>

        <td><?php echo $dbid;?></td>        
            <td><?php echo $dbdate;?></td>
            <td><?php echo $dbpostname;?></td>
            <td><?php echo $dbpostdegree;?></td>
            <td><?php echo $dbpostsalary;?></td>
            <td>
            <?php
            if($status==1)
            {
                ?>
         <a href="superdecline.php?id=<?php echo $dbid; ?>">Decline</a></td>
         <?php
        }
    }                   
    ?>
    <tr>
        <td align="center" colspan="7"><a href="superprofile.php">Return</a> </td>
    </tr>
    
</table>
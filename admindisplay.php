<table border="2">
    <tr>
    <th>Post Id</th>
    <th>Post Date</th>
    <th>Name</th> 
    <th>Degree</th>
    <th>Salary</th>
    <th>Action</th>
    

    </tr>
<?php
    $conn=mysqli_connect("localhost","root","","duiet") or die("Database connection error");
    $query="select * from empposts";
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
            <td><?php echo $dbid?></td>
            <td><?php echo $dbdate;?></td>
            <td><?php echo $dbpostname;?></td>
            <td><?php echo $dbpostdegree;?></td>
            <td><?php echo $dbpostsalary;?></td>
            <td>
            <?php
            if($status==0)
            {
                ?>
                <a href="approve.php?id=<?php echo $dbid; ?>">Approve</a> | <a href="decline.php?id=<?php echo $dbid; ?>">Decline</a></tr>
                <?php

            }
            else if($status==1){
                ?>
                <a href="decline.php?id=<?php echo $dbid; ?>">Decline</a></td>
                <?php
            }
            else
            {
                ?>
                <a href="approve.php?id=<?php echo $dbid; ?>">Approve</a>
                <?php
            }
            ?>
            </td>
        </tr>
        <?php

    }
    ?>
    <tr>
        <td align="center" colspan="7"><a href="adminprofile.php">Return</a> </td>
    </tr>
    
</table>
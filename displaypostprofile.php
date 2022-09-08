<table border="2">
	<tr>
		<th>Date</th>
		<th>Employee Name</th>
		<th>Employee Degree</th>
        <th>Employee Salary</th>
         <th>Operation</th>
	</tr>
	<?php
         $conn=mysqli_connect("localhost", "root","","duiet") or die ( "database connection error");
         $query= "select * from empposts";
         $res= mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($res))

         {
			$dbpid=$row["pid"];
			$date=$row["pdate"];
	         $name=$row["pname"];
             $degree=$row["pdegree"];
             $salary=$row["psalary"];
			 $status=$row["status"];
	         
         ?>
         <tr>
         	<td> <?php echo $date;  ?></td>
         	<td> <?php echo $name;  ?></td>
         	<td> <?php echo $degree; ?></td>
             <td> <?php echo $salary; ?></td>
			 <td>
			 <?php
			 if($status==0)
			 {
				 echo "Pending";
			 }
			 else if($status==1)
			 {
				 echo "Approved";
			 }
			 else
			 {
				 echo "Rejected";
             }
             ?>
			 </td>
         </tr>
         <?php
     		}
	  ?>
	  <tr>
	  <td colspan="5" align="center"><a href="postprofile.php">Add more Data</a></td>
	  </tr>
</table>
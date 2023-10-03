<?php
 require '../include/connection1.php';
 $result = mysqli_query($connection,"SELECT * FROM
teacher");
 $count=mysqli_num_rows($result);
echo "<table border='1' style='width=100px'>
<tr>
<td>Teacher id</td>
<td>Name</td>
<td>Designation</td>
<td>Branch</td>
<td>Contact no</td>
</tr>";
 while($count>0)
 {
 while($row = mysqli_fetch_array($result))
   {echo "<tr>";
 echo "<td>" . $row['tid'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['designation'] . "</td>";
 echo "<td>" . $row['branch'] . "</td>";
 echo "<td>" . $row['contactno'] . "</td>";
 echo"</tr>";
 }
 $count=$count-1;
 }

 mysqli_close($connection);
?>
</table>

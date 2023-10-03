<?php
 require '../include/connection1.php';
 $result = mysqli_query($connection,"SELECT * FROM
student");
 $count=mysqli_num_rows($result);
echo "<table border='1' style='width=100px'>
<tr>
<td>Libraryid</td>
<td>Registration number</td>
<td>Name</td>
<td>Branch</td>
<td>Semester</td>
<td>Section</td>
<td>Year of adm</td>
</tr>";
 while($count>0)
 {
 while($row = mysqli_fetch_array($result))
 {echo "<tr>";
 echo "<td>" . $row['libid'] . "</td>";
 echo "<td>" . $row['regno'] . "</td>";
 echo "<td>" . $row['stuname'] . "</td>";
 echo "<td>" . $row['branch'] . "</td>";
 echo "<td>" . $row['semester'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo "<td>" . $row['yearofadm'] . "</td>";
  echo"</tr>";
 }
 $count=$count-1;
 }

 mysqli_close($connection);
?>
</table>

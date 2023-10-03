<?php
 require '../include/connection1.php';
 $result = mysqli_query($connection,"SELECT * FROM
issuebooks order by libid");
 $count=mysqli_num_rows($result);
echo "<table border='1' style='width=100px'>
<tr>
<td>Libraryid</td>
<td>Bookid</td>
<td>Issue date</td>
<td>Return date</td>
</tr>";
 while($count>0)
 {
 while($row = mysqli_fetch_array($result))
 {echo "<tr>";
 echo "<td>" . $row['libid'] . "</td>";
 echo "<td>" . $row['bookid'] . "</td>";
 echo "<td>" . $row['issuedate'] . "</td>";
 echo "<td>" . $row['returndate'] . "</td>";
 echo"</tr>";
 }
 $count=$count-1;
 }

 mysqli_close($connection);
?>
</table>

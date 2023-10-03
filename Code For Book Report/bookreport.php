<?php
 require '../include/connection1.php';
 $result = mysqli_query($connection,"SELECT * FROM books")
$count=mysqli_num_rows($result);
echo "<table border='1' style='width=100px'>
<tr>
<td>Book Id</td>
<td>Name</td>
<td>Publication</td>
<td>Author</td>
<td>Subject</td>
<td>Number Of Books</td>
</tr>";
 while($count>0)
 {
 while($row = mysqli_fetch_array($result))
 {echo "<tr>";
 echo "<td>" . $row['code'] . "</td>";
 echo "<td>" . $row['bookname'] . "</td>";
 echo "<td>" . $row['publication'] . "</td>";
 echo "<td>" . $row['author'] . "</td>";
 echo "<td>" . $row['subject'] . "</td>";
 echo "<td>" . $row['numberofbooks'] . "</td>";
 echo"</tr>";
 }
 $count=$count-1;
 }
 mysqli_close($connection);
?></table>

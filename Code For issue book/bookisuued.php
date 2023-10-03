<?php
require'../include/connection1.php';
$result = mysqli_query($connection,"SELECT * FROM studentlogin");
 while($row = mysqli_fetch_array($result))
 {
 $libid=$row['logid'] ;
$username= $row['username'];
$password= $row['password'];
$numbooks=$row['numbooks'];
 }
 if($numbooks>3)
 {
 echo"cannnot issue books limit exceeded";
 }
 else
 {
 $libid=$_POST['libid'];
 $bookid=$_POST['bookid'];
 $issuedate=$_POST['issuedate'];

$returndate=date_add($issuedate,date_interval_create_from_date_string("15 days"));
 $sql="INSERT INTO issuebooks(libid,bookid,issuedate,returndate)
 VALUES
 ('$libid','$bookid','$issuedate','$returndate')";
 mysqli_query($connection,"UPDATE studentlogin SET
numbooks=numbooks+1
 WHERE logid='$libid'");
 mysqli_query($connection,"UPDATE book SET
numberofbooks=numberofbooks-1
 WHERE code='$bookid'");
 if (!mysqli_query($connection,$sql))
 {
 die('Error1: ' . mysqli_error($connection));
 }
 else
 echo"added 1 record";
 }
 mysqli_close($connection);
 ?>
<?php
require'../include/connection1.php';
$libid=$_POST['libid'];
$bookid=$_POST['bookid'];
$result = mysqli_query($connection,"SELECT * FROM issuebooks where libid= '$libid' &&
bookid='$bookid'");
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
$sql=mysqli_query($connection,"UPDATE studentlogin SET
numbooks=numbooks-1
 WHERE logid='$libid'");
 $sql1=mysqli_query($connection,"UPDATE book SET
numberofbooks=numberofbooks+1
 WHERE code='$bookid'");
 $sql2=mysqli_query($connection,"DELETE FROM issuebooks WHERE
libid=$libid && bookid='$bookid'");
 }
 else
echo"no book issued";
 mysqli_close($connection);
 ?>

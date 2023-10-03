<?php
$con=mysqli_connect("localhost","root","rahul#1991","library");
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 $loginid=$_POST['teacherid'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $teachername=$_POST['teachername'];
 $designation=$_POST['designation'];
 $branch=$_POST['branch'];
 $contactno=$_POST['contact'];
 $lecture='';
$sql="INSERT INTO teacher (Tid, name, designation, branch, contactno,lectures)
VALUES
( $loginid,$teachername,$designation,$branch,$contactno,$lecture)";
$tql="INSERT INTO teacherlogin ($loginid,$username,$password)
VALUES
( $loginid,$username, $password)";
if (!mysqli_query($con,$sql))
 {
 echo "error";
 }
 if (!mysqli_query($con,$tql))
 {
 echo "error1";
 }
echo "successs";
mysqli_close($con);
?>

<?php
$con=mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql="INSERT INTO event(Name,date,time,venue,mname,contactno,email)
VALUES
('$_POST[ename]','$_POST[date]','$_POST[time]','$_POST[venue]','$_POST[name
]','$_POST[phno]','$_POST[email]')";
if (!mysqli_query($con,$sql))
 {
 die('Error: ' . mysqli_error($con));
 }
 echo "wait for conformation";
mysqli_close($con);
?>

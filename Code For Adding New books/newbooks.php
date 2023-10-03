<?php
$con=mysqli_connect("localhost","root","","library");
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql="INSERT INTO books (code, bookname, author, publication, subject,
numberofbooks)
VALUES
('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P
OST[subject]','$_POST[numberofbooks]')";
if (!mysqli_query($con,$sql))
 {
 echo "error";
 }
echo "successs";
mysqli_close($con);
?>
<?php
$con=mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$sql="INSERT INTO newarrivals (code, bookname, author, publication, subject,
numberofbooks,arrivaldate)
VALUES
('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P
OST[subject]','$_POST[numberofbooks]','$_POST[arrivaldate]')";
if (!mysqli_query($con,$sql))
 {
 echo "error";
 }
echo "successs";
mysqli_close($con);
?>

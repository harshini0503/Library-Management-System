Code for entering admin username and password

<?php
 //Start session
 session_start();
 //Unset the variables stored in session
 unset($_SESSION['SESS_FIRST_NAME']);
 unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html xml:lang="EN" lang="EN" dir="ltr">
<head>
<title> MLRIT LIBRARY INFORMATION SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.tabs.setup.js"></script>
<!-- End Homepage Specific Elements -->
</head>
<body id="top">
<div class="wrapper row1">
 <div id="header" class="clear">
 <div class="fl_left">
<h1><a href="homepage.php">SOE LIBRARY MANAGEMENT
SYSTEM</a></h1>
 <p></p>
 </div>
 <div class="fl_right">
 <ul>
 <li><a
href="http://localhost/xampp/project/library/homepage.php">Home</a></li>
 <li><a
href="http://localhost/xampp/project/library/contact/Contactus.php">Contact
Us</a></li>
 <li><a href="http://localhost/xampp/project/library/egateway/egateway.php">EGateway</a></li>
 <li><a
href="http://localhost/xampp/project/library/studentlogin/studentlogin.php">Student
Login</a></li>
 <li ><a href="teacherlogin.php">Teacherlogin</a></li>
<li><a
href="http://localhost/xampp/project/library/admin/adminlogin.php">Adminlogin</a></
li>
 </ul>
 <form action="#" method="post" id="sitesearch">
 <fieldset>
 <strong>Search:</strong>
 <input type="text" value="Search Our webiste for books;"
onfocus="this.value=(this.value=='Search Our website for books;')? '' : this.value ;" />
 <input type="image" src="../images/search.gif" id="search" alt="Search" />
 </fieldset>
 </form>
 </div>
 </div>
</div>
<!--
#######################################################################
################################ -->
<div class="wrapper row2">
 <div class="rnd">
 <!-- ###### -->
 <div id="topnav">
 <ul>
 <li class="active"><a
href="http://localhost/xampp/project/library/homepage.php">Home</a></li>
 <li><a href="http://localhost/xampp/project/library/newarrivals.php">New
Arrivals</a></li>
 <li><a href="http://localhost/xampp/project/library/onlinebooks.php">Online
Books</a></li>
<li><a href="http://localhost/xampp/project/library/egallery.php">E
Gallery</a></li>
 <li><a href="http://localhost/xampp/project/library/questionpaper.php">Question
Paper</a></li>
 <li><a href="http://localhost/xampp/project/library/aboutus.php">About
Us</a></li>
 <li><a href="http://localhost/xampp/project/library/bookissue.php">Book Issue
</a></li>
 <li class="last"><a href="#"></a></li>
 </ul>
 </div>
 <!-- ###### -->
 </div>
</div>
<!--
#######################################################################
################################ -->
<div class="wrapper">
 <div id="featured_slide" class="clear">
 <!-- ###### -->
 <div class="overlay_left"></div>
 <div id="featured_content">
 <div class="featured_box" id="fc1"><img src="../images/demo/slider/1.gif" alt=""
/>
 <div class="floater">
 <h2>All ABOUT SOE LIBRARY</h2>
 <p>School oF Engineering Library or the S.O.E library is one of the finest library
in kerela having a good collection of books related to various subjects</p>
 <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
 </div>
 </div>
 <div class="featured_box" id= "fc2"><img src="../images/demo/slider/2.gif" alt=""
/>
 <div class="floater">
 <h2>Existence</h2>
 <p>School oF Engineering library came into existence in year 1995 and from then
on it has been a premier source of information for college students</p>
 <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
 </div>
 </div>
 <div class="featured_box" id="fc3"><img src="../images/demo/slider/3.gif" alt=""
/>
 <div class="floater">
 <h2>Collection</h2>
 <p>Department of Engineering Library has a collection of over 50000 books related to
various subjects in engineering</p>
<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
 </div>
 </div>
 <div class="featured_box" id="fc4"><img src="../images/demo/slider/4.gif" alt=""
/>
 <div class="floater">
 <h2>E-Repository</h2>
 <p>School oF Engineering Library has a collection of 6000 cds and 2800 online
journals and also has a section where teachers upload their lectures notes and student
can download them.</p>
 <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
 </div>
 </div>
 <div class="featured_box" id="fc5"><img src="../images/demo/slider/5.gif" alt=""
/>
 <div class="floater">
 <h2>Latest News and events</h2>
 <p></p>
 <p class="readmore"><a href="#">Click here to go to latest news page;</a></p>
 </div>
 </div>
 </div>
 <ul id="featured_tabs">
 <li><a href="#fc1">All About The Library</a></li>
 <li><a href="#fc2">Existence</a></li>
 <li><a href="#fc3">Collection of Books</a></li>
 <li><a href="#fc4">E-Repository</a></li>
 <li class="last"><a href="#fc5">Latest News &amp; Events</a></li>
 </ul>
 <div class="overlay_right"></div>
 <!-- ###### -->
 </div>
</div>
<!--
#######################################################################
################################ -->
<div class="wrapper row3">
 <div class="rnd">
 <div id="container" class="clear">
 <!--
#######################################################################
################################ -->
 <div id="homepage" class="clear">
 <!-- ###### -->
 <div id="left_column">
<h2>Sugeestion</h2>
 <div class="imgholder"><a href="#"><img
src="../images/images/suggestions.jpg" alt="" /></a></div>
 <h2>Book request</h2>
 <div class="imgholder"><a href="#"><img
src="../images/images/bookrequest1.jpg" alt="" /></a></div>
 <h2>Account creation</h2>
 <div class="imgholder"><a href="#"><img src="../images/images/account.jpg"
alt="" /></a></div>
 <h2>Photos</h2>
 <div class="imgholder"><a href="#"><img src="../images/images/photos.jpg"
alt="" /></a></div>
 </div>
 <!-- ###### -->
 <div id="latestnews">
 <h2>Pls enter username and password to login</h2>
 <table>
<form action="checklogin.php" method="post"><br><br>
Username:<input name="username" type="text" maxlength="12"><br><br>
Password:<input name="password" type="password" maxlength="12">
<input name="submit" type="submit">
</form>
</table>
 </div>
 <!-- ###### -->

 <!-- ###### -->
 </div>
 <!--
#######################################################################
################################ -->
 <!--
#######################################################################
################################ -->
 <div id="academiclinks" class="clear">
 <h2>Quickly Find What You Are Looking For</h2>
 <div class="linkbox">
 <ul>
 <li><a href="http://localhost/xampp/project/library/homepage.php">&raquo;
Home</a></li>
 <li><a href="http://localhost/xampp/project/library/studentlogin.php">&raquo;
Student Login</a></li>
 <li><a href="teacherlogin.php">&raquo; Teacher Login</a></li>
 <li><a href="http://localhost/xampp/project/library/adminlogin.php">&raquo;
Adminlogin</a></li>
<li><a href="http://localhost/xampp/project/library/newarrival.php">&raquo;
New Arrivals</a></li>
 <li><a href="http://localhost/xampp/project/library/onlinebooks.php">&raquo;
Online Books</a></li>
 <li><a href="http://localhost/xampp/project/library/egallery.php">&raquo; EGallery</a></li>
 <li><a href="http://localhost/xampp/project/library/aboutus.php">&raquo;
About Us</a></li>
 <li><a href="http://localhost/xampp/project/library/contactus.php">&raquo;
Contact Us</a></li>
 <li><a href="http://localhost/xampp/project/library/questionpaper.php">&raquo;
Question Papers</a></li>
 <li><a href="http://localhost/xampp/project/library/latestnews.php">&raquo;
Latest Events & News</a></li>
 </ul>
 </div>

 <!--
#######################################################################
################################ -->
 </div>
 </div>
</div>
<!--
#######################################################################
################################ -->
<!--
#######################################################################
################################ -->
<div class="wrapper">
 <div id="copyright" class="clear">
 <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved for SOE
LIBRARY-</p>
 </div>
</div>
</body>
</html>

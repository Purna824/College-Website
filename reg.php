<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Canning Government polytechnic</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Cannig Government Polytechnic">
 <meta name="author" content="sagar">
 <link rel="stylesheet" type="text/css" href="F:\New folder\New folder\css/style1.css">
<script src="F:\New folder\New folder\javascript/js.js="></script>
<script src="F:\New folder\New folder\javascript/login.js"></script> 

</head>
<body class="body">
<header class="mainheader">
	<width:1000%>
	<img src="F:\New folder\New folder\images\cgp.jpg">
	</width:1000%>
	<content id="search">
		<form>
 <!-- <input type="text" name="search" placeholder="Search anything..." onclick="window.location.href='search.html'">-->
</form>
	</content>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="course.html">Course</a></li>
			<li><a href="download.html">Download</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="login.html">Login</a></li>
			
		</ul> 
	</nav>
</header>

<div class="container">
	  <div class="main">
	  
		<h3>Canning Government Polytecnic Registration</h3><hr/>
 
		<form action="connect.php"  method="post" >
			<strong>FirstName :</strong></br>
			<input type="text" class="form-control" name="firstname" id="firstname"/></br>
   
			 <strong>LastName :</strong></br>
			 <input type="text" class="form-control" name="lastname" id="lastname"/></br>
  
			<strong>Password :</strong></br>
			<input type="text" class="form-control" name="password" id="password"/></br>
  
			<strong>Registration Number :</strong></br>
			<input type="text" class="form-control" name="registrationnumber" id="registrationnumber"/></br>


            <strong>Email :</strong></br>
		    <input type="text" class="form-control" name="email" id="email"/></br>

			<strong>Mobile Number :</strong></br>
		    <input type="text" class="form-control" name="mobilenumber" id="mobilenumber"/></br>

			<input type="submit" class="btn btn-primary">
		</form>
	  </div>
	 
	   <div class="fugo">
		 <a href="F:\New folder\New folder\images\ssg.png"><img src="F:\New folder\New folder\images\ssg.png" /></a>
	  </div>
	</div>

<footer class="mainFooter">
	<p>Copyright &copy <a href="https://www.facebook.com">ImpactCoders</a> </p>
	<center>
	<a href="https://www.facebook.com">Facebook</a>
	<a href="https://www.twitter.com">Twitter</a>
	<a href="https://www.youtube.com">Youtube</a>
	</center>
</footer>
<script type="text/javascript">
  document.title="Login";
</script>
</body>
</html>
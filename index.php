<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>home</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>	
<body>
<div class="width-100 header">
<div class="container">
<div class="width-25` head-left">
<ul>
<li><a href="srms\admin-login.php"><i class="fa fa-lock"></i>staff Login </a></li>
<li><a href="srms\find-result.php"><i class="fa fa-lock"></i>student Login </a></li>
</ul>
</div>
<div class="width-62">
<marquee class="notification">
<span><img src="images/new.gif"></span>Examination notification
<span><img src="images/new.gif"></span>Result
<span><img src="images/new.gif"></span>Form Fillup
</marquee>
</div>
<div class="width-13 head-right">
<ul>
<li><a href="admission.php"><i class="fa fa-comment"></i>admission open<span class="head-span"><img src="images/new.gif"></span> </a></li>
</ul>
</div>
</div>
</div>
<div class="container">
<div class="width-15 logo">
<img src="images\cgp.jpg">
</div>

<div class="width-85 menu-bar">
  <ul>
      <li class="active"><a href="https://polytechnic.wbtetsd.gov.in/canninggovpoly">Home<i class="fa fa-home"></i></a></li>
      <li><a href="#">Institute<i class="fa fa-institution"></i></a>
          <div class="sub-menu-1">
              <ul>
                  <li class="hover-me"><a href="gfg.php">About us</a>
                  </li>
                  <li><a href="history.php">History</a></li>
                  <li><a href="vision mission.php">Vission & Mission</a></li>
                  <li class="hover-me"><a href="#">Library</a>
                    <div class="sub-menu-2">
                      <ul>
                        <li><a href="library.php">Funding</a></li>
                        <li><a href="library2.php">Capacity</a></li>
                    </ul>
                    </div>
                  </li>
                  <li><a href="faculty.php">Faculty & Staff</a></li>
              </ul>
          </div>
      </li>
      <li><a href="#">Academics</a><i class="fa fa-male"></i>
          <div class="sub-menu-1">
              <ul>
                  <li><a href="about.php">About</a></li>
                  <li><a href="programmes.php">Programmes</a></li>
                  <li><a href="facilities.php">Facilities</a></li>
              </ul>
          </div>
      </li>
      <li><a href="#">Adminstration</a>
          <div class="sub-menu-1">
              <ul>
                  <li><a href="struct.php">Structure</a></li>
                  <li class="hover-me"><a href="#">Rules & Regulation</a>
                    <div class="sub-menu-2">
                      <ul>
                        <!--<li><a href=>Student code of Conduct</a></li>-->
                        <li><a href="rule&regulation.php">Examination regulations</a></li>
                    </ul>
                    </div>
                  </li>
                  <li class="hover-me"><a href="#">Comittee Details</a>
                    <div class="sub-menu-2">
                      <ul>
                        <li><a href="antiragging.php">Anti Ragging Commitee</a></li>
                        <li><a href="examcomm.php">Examination commitee</a></li>
                        <li><a href="train&placement.php">Training & placement cell</a></li>
                       <!-- <li><a href="complaincomm.php">Internal complaint</a></li>-->
                    </ul>
                    </div>
                  </li>
                  <!--<li><a href="#">Nodal officiers</a></li>-->
              </ul>
          </div>
      </li>
      <li><a href="admission.php">Admission</a></li>
      <li><a href="#">Download</a>
          <div class="sub-menu-1">
              <ul>
                  <li><a href="download.php">Download Documents</a></li>
                  <li><a href="routine.php">Download routine</a></li>
              </ul>
          </div>
      </li>
      <li><a href="gallery.php">Gallery</a><i class="fa fa-image"></i></li>
      <li><a href="contact.php">Contact</a><i class="fa fa-feed"></i></li>
  </ul>
</div>
</div>
<div class="width-100"><img src="images\ssg.png" class="main-banner"></div>
<div class="mainContent">
</div>
<div class="main section">
<div class="container">
<div class="note-event">
<h2 class="heading-text mt-20">Notice Board</h2>
<span class="heading-border"></span>
<div class="notice-board mt-30">
<marquee direction="up" behavior="scroll" scrollamount="6" style="height:300px;">
<ul>
<li><i class="fa fa-check-square-o"></i>result  of 1st internal 1st sem</li>
<li><i class="fa fa-check-square-o"></i>result  of 1st internal 3rd sem</li>
<li><i class="fa fa-check-square-o"></i>result  of 1st internal 5th sem</li>
<li><i class="fa fa-check-square-o"></i>readmission in 1st sem</li>
<li><i class="fa fa-check-square-o"></i>readmission in 3rd sem</li>
</ul>
</marquee>
</div>
</div>
<div class="note-event">
<h2 class="heading-text mt-20">Recent Event</h2>
<span class="heading-border"></span>
<marquee direction="up" behavior="scroll" scrollamount="6" style="height:400px;">
<div class="event-list">
<div class="event-date">
<p>september</p>
<h4>21</h4>
</div>
<div class="event-content">
<p>Freshers</p>
<h4>party</h4>
</div>
<div class="event-date">
<p>october</p>
<h4>2</h4>
</div>
<div class="event-content">
<p>1st internal</p>
<h4>1st,3rd,5th sem</h4>
</div>
<div class="event-date">
<p>june</p>
<h4>23</h4>
</div>
<div class="event-content">
<p>chemistry</p>
<h4>viva</h4>
</div>
</div>
</marquee>
</div>
</div>
</div>
<div class="main-section bg-lightgrey">
<div class="container">
<div class="width-50">
<img src="images/ssg.png" class="mt-30" style="width:100%; padding:20px;">
</div>
<div class="width-50">
<div class="about-campus">
<h2 class="heading-text">Campus Information</h2>
<span class="heading-border"></span>
<p>Canning  Government Polytechnic is a premier institute. It is located in West Bengal.
Over the period, Canning Government Polytechnic has gained expertize through its trained and experienced faculty in the fields of Computer science,
electrical engineering, renewable engineering.</p>
<div class="width-50">
<ul>
<li><i class="fa fa-check"></i>The best diploma college in WB</li>
<li><i class="fa fa-check"></i>The best diploma college for cst</li>
<li><i class="fa fa-check"></i>The best campus</li>
</ul>
</div>
<div class="width-50">
<ul>
<li><i class="fa fa-check"></i>The best diploma college in WB</li>
<li><i class="fa fa-check"></i>The best diploma college for cst</li>
<li><i class="fa fa-check"></i>The best campus</li>
</ul>
</div>
<div class="width-33">
<div class="about-year">
<h3>3<span>+</span></h3>
<h5>Year of experience</h5>
</div>
</div>
<div class="width-33">
<div class="about-year">
<h3>150<span>+</span></h3>
<h5>Students passouts per year</h5>
</div>
</div>
<div class="width-33">
<div class="about-year">
<h3>100<span>+</span></h3>
<h5>students get job from campus</h5>
</div>
</div>
<div class="width-100"><a href="admission.php">Start Your Application<i class="fa fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-section bg-lightgrey">
<div class="container">
<div class="width-33">
<div class="popular-course">
<h2 class="heading-text">Our Popular Courses</h2>
<span class="heading-border"></span>
<p>We have 3 courses in our college and each course has 60 seats.
Students can get admitted in our college through clearing JEXPO and VOCLET exam.
</p>
<a href="programmes.php"> <i class="fa fa-arrow-right"></i>view all courses</a>
</div>
</div>
<div class="width-66">
<div class="width-25">
<div class="course-list bg-yellow"> <i class="fa fa-graduation-cap"></i>
<p>Diploma in Computer Science & Technology</p>
</div>
</div>
<div class="width-25">
<div class="course-list bg-yellow"> <i class="fa fa-graduation-cap"></i>
<p>Diploma in Electrical Engineering</p>
</div>
</div>
<div class="width-25">
<div class="course-list bg-yellow"> <i class="fa fa-graduation-cap"></i>
<p>Diploma in Renewable Energy</p>
</div>
</div>
</div>
</div>
</div>
<div class="main-section">
<div class="container">
<h2 class="heading-text">Gallery</h2>
<span class="heading-border"></span>
<div class="gallery">
<div class="width-25"><span><img src="images/g1.jpg"></span></div>
<div class="width-25"><img src="images/g3.jpg"></div>
<div class="width-25"><img src="images/g4.jpg"></div>
<div class="width-25"><img src="images/g5.jpg"></div>
<div class="width-25"><img src="images/g6.jpg"></div>
<div class="width-25"><img src="images/g7.jpg"></div>
<div class="width-25"><img src="images/g8.jpg"></div>
<div class="width-25"><img src="images/g9.jpg"></div>
</div>
</div>
<div class="footer-section">
<div class="container">
<div class="width-25">
<div class="footer-link">
<h2>Canning Government Polytechnic</h2>
<p>Canning  Government Polytechnic is a premier institute. It is located in West Bengal.<br>

Over the period, Canning Government Polytechnic has gained expertize through its trained and experienced faculty in the fields of Computer science,
<br>
electrical engineering, renewable engineering.</p>
<ul class="social-icon">
<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://www.facebook.com/somjayanta321"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li></ul>
</div>
</div>
<div class="width-25">
<div class="footer-link">
<h2>Featured links</h2>
<div class="width-100">
<ul class="footer-menu">
<li><a href="admission.php"><i class="fa fa-angle-right">Admission</i></a></li>
<li><a href="programmes.php"><i class="fa fa-angle-right">courses</i></a></li>
</div>
</div>
</div>
<div class="width-25">
<div class="footer-link">
<h2>Contact info</h2>
<ul class="footer-contact">
<li><i class="fa fa-envelope-o"><span>E-MAIL:canninggovpoly@gmail.com</span></i></li>
<li><i class="fa fa-whatsapp"><span>WHATS-APP:+91-9830067006</span></i></li>
<li><i class="fa fa-phone"><span>CONTACT-NO:+91-9830067006</span></i></li>
<li><i class="fa fa-globe"><span>WEBSITE:https://www.canning.com</span></i></li>
<li><i class="fa fa-copyright"><span>Devloped By <a href="Developers.php">ImpactCoders</a></span></i></li>
<li><a href="contact.php"><span>Contact Us</span></i></a></li></ul>
</div>
</div>
<div class="width-25">
<div class="footer-link newsletter">
  <h2>View On Map</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3688.8020278877757!2d88.5444785!3d22.3988195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDIzJzU1LjgiTiA4OMKwMzInNDAuMSJF!5e0!3m2!1sen!2sin!4v1699540564648!5m2!1sen!2sin"width="300" height="350" frameborder="10px" style="border:0" allowfullscreen
></iframe>
</div>
</div>
</div>
</div>
</body>
</html>
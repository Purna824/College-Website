<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\gallery.css">
	<title>Image Gallery</title>
</head>
<body>
<!-- Heading Name -->
<div class="heading">
	<h1>Image Gallery</h1>
</div>
	<!-- Image Gallery section all image in one div -->
	<div class="gallery">
<img src= images/g1.jpg
 
alt="Image 2" class="gallery-img" onclick="showImage(src)">
<img src= images/g2.jpg
 
alt="Image 3" class="gallery-img" onclick="showImage(src)">
<img src= images/g3.jpg
alt="Image 4" class="gallery-img" onclick="showImage(src)">
<img src= images/g4.jpg
alt="Image 5" class="gallery-img" onclick="showImage(src)">
<img src= images/g5.jpg
  
alt="Image 6" class="gallery-img" onclick="showImage(src)">
<img src= images/g6.jpg
 
alt="Image 7" class="gallery-img" onclick="showImage(src)">
<img src= images/g7.jpg
  
alt="Image 8" class="gallery-img" onclick="showImage(src)">
<img src= images/g8.jpg
 
alt="Image 9" class="gallery-img" onclick="showImage(src)">
<img src= images/g9.jpg
  
alt="Image 10" class="gallery-img" onclick="showImage(src)">
<img src= images/cgphistory.png
  
alt="Image 10" class="gallery-img" onclick="showImage(src)">
<img src= images/college.jpg
  
alt="Image 10" class="gallery-img" onclick="showImage(src)">
<img src= images/g9.jpg
  
alt="Image 10" class="gallery-img" onclick="showImage(src)">		 
</div>

<!-- Image containter where image will show in big size -->
	<div class="image-popup-container" id="imagePopup">
		<span class="close-button" onclick="closeImage()">×</span>
		<img src="" alt="Popup Image" id="popupImage">
	</div>
	<script src="javascript\gallery.js"></script>
</body>
</html>


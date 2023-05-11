<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   include 'C:\xampp\htdocs\coding club/db.php';
   $fname = $_POST["fname"];
   $email = $_POST["email"];
   $mobile = $_POST["mobile"];
   $country = $_POST["country"];
   $college = $_POST["college"];
   $sql = "INSERT INTO `joininfo` (`fname`, `email`, `mobile`, `country`, `college`, `dt`) VALUES ('$fname', '$email', '$mobile', '$country', '$college', current_timestamp());";
   $result = mysqli_query($conn, $sql);
   if($result){
   $showAlert = true;
   header('location: thanks.html');
}
else{
	$showError = "Registration not completed !";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Join | Athena</title>
	<link rel="stylesheet" type="text/css" href="css/courses.css">
	<link rel="stylesheet" type="text/css" href="css/join.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- Navigation bar section --->
<div class="home">
	<div class="navigation">
		<div class="logo">
			<img src="images/logo.jpg">
			<h1><span>B S A I T M</span><br>Coding Club</h1>
		</div>
		<div class="items">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="#" style="color: #ff9f67; border-bottom: 2px solid #ff9f67;">Join</a></li>
			</ul>
		</div>
		<i class="fa-solid fa-bars" id="menu_bar"></i>
	</div>

<!--- Header Ssection -->
<div class="head">
	<h1>Registration</h1>
	<p>Home | Join</p>

</div>
</div>
<div class="responsive_nav" id="navbar">
	<div class="items">
		<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="#" style="color: #ff9f67; border-bottom: 2px solid #ff9f67;">Join</a></li>
			</ul>
	</div>
</div>


<!-- Form section -->
<div class="join">
	<div class="form_text">
		<h1>Register Here</h1>
	</div>
	<div class="form">
		<img src="images/form.jpg">
		<form action="/coding club/join.php" method="POST"> 
			<input type="text" name="fname" id="fname" placeholder="Full Name"><br>
			<input type="email" name="email" id="email" value="" placeholder="Email"><br>
			<input type="number" name="mobile" id="mobile" placeholder="Mobile Number"><br>
			<input type="text" name="country" id="country" placeholder="Country"><br>
			<input type="text" name="college" id="college" placeholder="College / University"><br>
			<button>Submit</button>
		</form>
	</div>
</div>

<!-- Footer section -->
<!-- Script CDN-->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="javascript/index.js"></script>
</body>
</html>
<html>
<head>
	<title>VisualEyes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: 'Flamenco', cursive; font-weight: lighter;">
	<header>
		<nav>
			<div class="row clearfix">
				<img src="images/logo3n.png" class="logo">
				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="http://localhost/proj/proj3/">Home</a></li>
					<li><a href="http://localhost/proj/proj3/aboutus.php">About Us</a></li>
					<li><a href="http://localhost/proj/proj3/help.php">Help</a></li>
				</ul>
				
				<?php include('speech.php'); ?>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div class="main-content-header">
		<h1>Welcome to <span class="colorchange">Visual-Eyes</span>.<br>Eye care, we care.</h1>
		<a href="aid/book.php" class="btn btn-full">Book an Appointment</a>
		<a href="#" class="btn btn-nav">Sentiment Analysis</a>
		</div>
	</header>

	<script type="text/javascript">

		function slideshow(){
			var x = document.getElementById('check-class');
			if(x.style.display === "none"){
				x.style.display = "block";
			}else{
				x.style.display = "none";
			}
		}

	</script>
</body>
</html>
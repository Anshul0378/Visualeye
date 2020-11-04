<html>
<head>
	<title>VisualEyes</title>
	<link rel="stylesheet" type="text/css" href="css/style-about.css">
	<link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
				<?php include('speech-help.php'); ?>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div style="margin-left: 8%; margin-top: 5%; margin-right: 8%;">
		<h1>Welcome to <span class="colorchange">Visual-Eyes</span>.<br>Eye care, we care.</h1><br><br>

		<table>

		<tr>
			<td style="width: 50%;"><h2 style="font-size: 30px; color: #48D1CC;">INTRUCTIONS</h2></td>
		</tr>

		<tr>
			<td>
				<ul style="font-size: 18px;font-family: 'Roboto', sans-serif;list-style-type: circle; padding-bottom: 170px;">
				<li> alt + i : dictate page instructions</li><br>
				<li> alt + r : to start voice commands</li><br>
				<li> shift + alt + a + a : turn e-reader API on and off </li><br>
					<li> shift + alt + arrow keys : to navigate reader through website</li><br>
				</ul>
			</p></td>

		</tr>
		</table><br>

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
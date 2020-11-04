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
				<?php include('speech-about.php'); ?>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div style="margin-left: 8%; margin-top: 5%; margin-right: 8%;">
		<h1>Welcome to <span class="colorchange">Visual-Eyes</span>.<br>Eye care, we care.</h1><br><br>

		<table>

		<tr>
			<td style="width: 50%;"><h2 style="font-size: 25px; color: #48D1CC; font-weight: lighter;">MOTIVATION</h2></td>
			<td style="padding-left: 40px;"><h2 style="font-size: 25px; color: #48D1CC;font-weight: lighter;">AID</h2></td>
		</tr>
 
		<tr>
			<td style=" text-align: justify; padding-right: 40px;"><p style="font-family: 'Roboto', sans-serif;font-size: 20px;font-weight: lighter;">Our motivation was to create an app that assists visually challenged people in society. Although there are many tools available, most of them require us to purchase extra equipment, which is not possible due to various constraints. Vision related problems include macular degeneration, diabetic retinopathy, corneal clouding, childhood blindness, and a number of infections. Hence, we aim to create a solution that is accessible to all.</p></td>

		
			<td style=" text-align: justify; padding-left: 40px;"><p style="font-size: 18px;font-family: 'Roboto', sans-serif;">This website provides various benefits like:
			<ul style="font-size: 18px;font-family: 'Roboto', sans-serif;">
				<li>Voice API: The user can book appointments by verbally dictating text. Furthermore, the website can be browsed by means of voice navigation.</li>
				<li>E-Reader: A verbal guide of the website can be given to the visually impaired user in order to have an understanding about the context of the page.</li>
				<li>Sentiment Analysis: Various face emotions of a person can be captured. This would indicate their mood to the user.</li>
			</ul></p></td>
		</tr>
		</table><br>

		<div style="padding: 10px; font-size: 14px;font-family: 'Roboto', sans-serif;">
			<pre class="tab"><h3 style="font-size: 14px; color: #48D1CC; font-weight: lighter;text-transform: uppercase;">Contributers:</h3></td>Rajan Yadav [ 17BCE2353 ]		Anshul Kumar Mundra [ 17BCE0378 ]	Shantanu Sehrawat [ 17BCE0439 ]		Abhishek Singh [ 17BCE2004 ]
Viddhi Lakhwara [ 17BCE2217 ]		Utkarsh Ashish [ 17BCE2343 ]		Shashank Nishad [ 17BCE0564 ]</pre><br><br>
		</div>

		

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
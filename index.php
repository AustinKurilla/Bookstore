<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Austin and Brad Bookstore</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/indexstyles.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100;1,400&display=swap" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
		<div id="nav">
			<ul>
				<div>
				<li><a href="index.php">Home</a></li>
				<li><a href="catalog.php">Catalog</a></li>
				<li><a href="search.php">Search</a></li>
				</div>
				<div>
				<li><a href="news.php">News</a></li>	
				<li><a href="bookclub.php">Book Club</a></li>
				<li><a href="staffpicks.php">Staff Picks</a></li>
				</div>
				<div>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="merch.php">Merchandice</a></li>
				<?php
				if(!isset($_SESSION['auth'])){
					echo "<li><a href='login.php'>Login</a></li>";
				}
				if(isset($_SESSION['auth'])){
						echo "<li><a href='admin.php'>Admin</a></li>";
						echo "<li><a href='logout.php' id='logoutbutton'>Logout</a></li>";
					}
				?>
				</div>
			</ul>
		</div>
		<img src="images/homeheader.jpg" alt="front of a bookstore class="strech"/>
		<h1>The Austin and Brad Bookstore</h1>
		<div id="content">
			
			<div class="contentbox">
				<h3>Address</h3>
				<p>101 Bookstore Drive</p>
				<p class="margin">Eau Claire, WI 54701</p>
				
				<h3>Phone</h3>
				<p>(123)-456-7890</p>
			</div>
			<div class="contentbox">
				<h2 class="margin">Store Hours</h2>
				<p>Mon	8am-4pm</p>
				<p>Tues	8am-2pm</p>
				<p>Wed	10am-10pm</p>
				<p>Thu	8am-4pm</p>
				<p>Fri	8am-5pm</p>
				<p>Sat	CLOSED</p>
				<p>Sun	10am-2pm</p>
			</div>
		</div>
	
	
	</div>
</body>
</html>

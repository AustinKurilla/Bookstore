<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>News</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/newspage.css">
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
		<div id="content">
			<h1 id="header">Bookstore News!</h1>
			<div class="article">
				<div class="bar"></div>
				<h2 class="title">New Bookclub List Posted!</h2>
				<p class="author">by Austin Kurilla 12-12-20</p>
				<div class="imgwrapper">
					<img class="articleimg" src="images/news3.jpg" alt="Stack of books"/>
				</div>
				<p class="story">New Best of 2020 list posted! Head over to the <a href="staffpicks.php" target="_blank"> Staff Picks</a> page to see!</p>
			</div>
			<div class="article">
				<div class="bar"></div>
				<h2 class="title">Official Opening</h2>
				<p class="author">by Austin Kurilla 11-29-20</p>
				<div class="imgwrapper">
					<img class="articleimg" src="images/news1.jpg" alt="Fireworks"/>
				</div>
				<p class="story"> Library website officially up and running! Check out the Catalog to see all of our books! We would like to give thanks to the <a href="https://uwec.bncollege.com/shop/uw-eauclaire/home" target="_blank"> UW Eau Claire Book Store</a> for the inspiration!</p>
			</div>
			<div class="article">
				<div class="bar"></div>
				<h2 class="title">New Books Added to the Library!</h2>
				<p class="author">by Austin Kurilla 12-2-20</p>
				<div class="imgwrapper">
					<img class="articleimg" src="images/news2.jpg" alt="Stack of books"/>
				</div>
				<p class="story">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat nec ex ac elementum. Cras vel consectetur nibh, et scelerisque nisi. Quisque venenatis tempo</p>
			</div>
			
		</div>
	</div>
</body>
</html>

<?php
	session_start() ;
?>
<html>
<head>
	<title>Merch</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/merch.css" />
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
			<h1>Mechandise</h1>
			<div id="merch">
				<div class='row'>
					<div class="item">
						<img src="images/merch1.jpg" alt="Graphic Sweatshirt">
						<p>Graphic Sweatshirt</p>
						<p>$35.99</p>
					</div>
					<div class="item">
						<img src="images/merch2.jpg" alt="Graphic Shirt">
						<p>Read More Books Shirt</p>
						<p>$15.00</p>
					</div>
				</div>
				<div class='row'>
					<div class="item">
						<img src="images/merch3.jpg" alt="Graphic Shirt">
						<p>All I need is books Books and Cats shirt</p>
						<p>$20.00</p>
					</div>
					<div class="item">
						<img src="images/merch4.jpg" alt="Graphic Shirt">
						<p>I need more Book shirt</p>
						<p>$15.00</p>
					</div>
				</div>
				<div class='row'>
					<div class="item">
						<img src="images/merch5.jpg" alt="Graphic Hat">
						<p>Books hat</p>
						<p>$10.00</p>
					</div>
				</div>
			</div>
		</div>
<body>

</body>
</html>
<?php
	session_start() ;
?>
<html>
<head>
	<title>Staff Picks</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/staffpick.css" />
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
			<div class='contentbox'>
				<h1>Top 10 Books of 2020</h1>
				<ol>
					<li>The Vanishing Half by Brit Bennett</li>
					<li>Deacon King Kong: A Novel by James McBride</li>
					<li>The Glass Hotel by Emily St. John Mandel</li>
					<li>The Mirror and the Light by Hilary Mantel</li>
					<li>Uncanny Valley by Anna Wiener</li>
					<li>Hidden Valley Road by Robert Kolker</li>
					<li>Luster by Raven Leilani</li>
					<li>Hamnet by Maggie O'Farrell</li>
					<li>A Burning by Megha Majumdar</li>
					<li>Writers & Lovers by Lily King</li>
				</ol>
			</div>
			<div class='contentbox'>
				<h1>Top 10 Books of 2019</h1>
				<ol>
					<li>The Testaments by Margaret Atwood</li>
					<li>On Earth We're Briefly Gorgeous by Ocean Vuong</li>
					<li>The Nickel Boys by Colson Whitehead</li>
					<li>The Topeka School by Ben Lerner</li>
					<li>Three Women by Lisa Taddeo</li>
					<li>Trust Exercise by Susan Choi</li>
					<li>The Dutch House by Ann Patchett</li>
					<li>Lost Children Archive by Valeria Luiselli</li>
					<li>City of Girls: A Novel by Elizabeth Gilbert</li>
					<li>The Yellow House by Sarah M. Broom</li>
				</ol>
			</div>
			<div class='contentbox'>
				<h1>Top 10 Books of 2018</h1>
				<ol>
					<li>There There by Tommy Orange</li>
					<li>Educated by Tara Westover</li>
					<li>Circe by Madeline Miller</li>
					<li>An American Marriage by Tayari Jones</li>
					<li>The Great Believers by Rebecca Makkai</li>
					<li>Washington Black by Esi Edugyan</li>
					<li>Asymmetry by Lisa Halliday</li>
					<li>The Overstory by Richard Powers</li>
					<li>Becoming by Michelle Obama</li>
					<li>The Incendiaries by R. O. Kwon</li>
				</ol>
			</div>
		</div>
<body>

</body>
</html>

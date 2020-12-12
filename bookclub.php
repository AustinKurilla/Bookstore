<?php
	session_start() ;
?>
<html>
<head>
	<title>Bookclub</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/bookclubstyles.css" />
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
			<h2>The Austin and Brad Bookclub </h2>
			<p>Started in 2020 the Austin and Brad Bookclub provides readers a monthly reading reconmendation, Every year follows a common theme</p>
			<p class='heading'>In 2020 we read Mystery Novels</p>
			<ul class='list'>
				<li>January 2020 - Double Cross by James Patterson</li>
				<li>Febuary 2020 - In The Woods by Tana French</li>
				<li>March 2020 - Rebecca by Daphne du Maurier </li>
				<li>April 2020 - In Cold Blood by Truman Capote</li>
				<li>May 2020 - 	The Godfather by Mario Puzo</li>
				<li>June 2020 - The Lovely Bones by Alice Sebold</li>
				<li>July 2020 - The Name of the Rose by Umberto Eco</li>
				<li>August 2020 - Gone Girl by Gillian Flynn </li>
				<li>September 2020 - Shutter Island by Dennis Lehane</li>
				<li>October 2020 - The Firm by John Grisham </li>
				<li>November 2020 - Mystic River by Dennis Lehane</li>
				<li>December 2020 - The Big Sleep by Raymond Chandler</li>
			</ul>
			<p class='heading'>In 2021 we read Sci Fi Books</p>
			<ul class='list'>
				<li>January 2021 - Dune (Dune, #1) by Frank Herbert</li>
				<li>Febuary 2021 - 1984 by George Orwell </li>
				<li>March 2021 - Fahrenheit 451 by Ray Bradbury</li>
				<li>April 2021 - Brave New World by Aldous Huxley</li>
				<li>May 2021 - The Martian by Andy Weir</li>
				<li>June 2021 - Ready Player One by Ernest Cline</li>
				<li>July 2021 - Childhood's End by Arthur C. Clarke</li>
				<li>August 2021 - The Time Machine by H.G. Wells</li>
				<li>September 2021 - The Hunger Games by Suzanne Collins</li>
				<li>October 2021 - The War of the Worlds by H.G. Wells</li>
				<li>November 2021 - Snow Crash by Neal Stephenson </li>
				<li>December 2021 - Starship Troopers by Robert A. Heinlein</li>
			</ul>
		</div>
<body>

</body>
</html>

<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catalog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/catalogstyles.css" />
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
			<h1 id="heading">All Books</h1>
			<div id="booklist">
				
			<?php
				$link = mysqli_connect('localhost',"root","","books");
				
				if($link === false){
					die("Error " . mysqli_connect_error());
				}
				$sql2 = "SELECT id, title, author, year FROM books";
				$result = $link->query($sql2);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						echo "<div class='listitem'>
							<p class='booktitle'>" .$row['title'] . "</p>
							<p class='bookauthor'>" .$row['author'] . "</p>
							<p class='bookyear'>" .$row['year'] . "</p> </div>";
					}
				} else{
					echo "0 Results";
				}
				mysqli_close($link);
			?>
		</div>
	</div>
</body>
</html>

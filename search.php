<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search for books</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/searchstyles.css"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100;1,400&display=swap" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="catalog.php">Catalog</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<?php
				if(isset($_SESSION['auth'])){
						echo "<li><a href='admin.php'>Admin</a></li>";
						echo "<li><a href='logout.php' id='logoutbutton'>Logout</a></li>";
					}
				?>
			</ul>
		</div>
		<div id="content">
			<h1 id="searchheading">Search for books!</h1>
			<form action="search.php" method="GET" id="form">
				<input type="text" name="query" id="searchbar"/>
				<input type="submit" value="Search" id="button">
			</form>
			<?php
			$link = mysqli_connect('localhost',"root","","books");
				
				if($link === false){
					die("Error " . mysqli_connect_error());
				}
			if(isset($_GET['query'])){	
			$query = htmlspecialchars($_GET['query']);
			
			$sql2 = "SELECT title, author, year FROM books WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%') OR (`year` LIKE '%".$query."%')" or die(mysql_error());
				$result = $link->query($sql2);
				
				if($result->num_rows > 0){
					echo "<h1 id='header'>Results</h1>";
					while($row = $result->fetch_assoc()){
						echo "<div class='listitem'>
							<p class='booktitle'>" .$row['title'] . "</p>
							<p class='bookauthor'>" .$row['author'] . "</p>
							<p class='bookyear'>" .$row['year'] . "</p> </div>";
					}
				} else{
					echo "0 Results";
				}
				}
				mysqli_close($link);
			?>
		</div>
	</div>
</body>
</html>

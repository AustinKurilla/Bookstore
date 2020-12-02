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
				<li><a href="index.html">Home</a></li>
				<li><a href="catalog.php">Catalog</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="contact.hmtl">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			<h1 id="searchheading">Search for books!</h1>
			<form action="search.php" method="GET" id="form">
				<input type="text" name="query" id="searchbar"/>
				<input type="submit" value="Search" id="button">
			</form>
			<?php
			if(isset($_GET['query'])){
				echo "Results for " . htmlspecialchars($_GET["query"]);
				}
			?>
		</div>
	</div>
</body>
</html>

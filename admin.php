<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
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
				<li><a href="admin.php">Admin</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Insert New Book</h2>
			<form action="admin.php" method="GET" id="form">
				<input type="text" name="booktitle" id="booktitle" placeholder="Book Title"/>
				<input type="text" name="bookyear" id="bookyear" placeholder="Book Year"/>
				<input type="submit" value="submit" id="button">
			</form>
		</div>
	</div>
</body>
</html>

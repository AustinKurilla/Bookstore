<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/indexstyles.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/contactstyles.css" />
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
		
		<div class = "header">
			<h4>Contact Us</h4>
		</div>
		
		<div class = "space">
		</div>
		
		<div class = "form1" method="GET" action='contact.php'>
		<form>
			<label for="fname">First Name:</label><br>
			<input type="fname" id="fname" name="firstname" placeholder="Your first name.."><br>
			
			<label for="lname">Last Name:</label><br>
			<input type="lname" id="lname" name="lastname" placeholder="and last name.."><br>
			
			<label for="email">Email Address:</label><br>
			<input type="email" id="email" name="email" placeholder="and your email.."><br>
			
			<label for="message">Enter Message:</label><br>
			<input type="message" id="message" name="message" placeholder="Let's hear it.."><br>
			
			<input type="submit" value = "Submit">
		</form>
		</div>
		<?php
				
				$link = mysqli_connect('localhost',"root","","contactpage");
				
				if($link === false){
					die("Error " . mysqli_connect_error());
				}
				
				if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['email']) && isset($_GET['message'])){
				$sql = "INSERT INTO messages (firstname, lastname, email, message) VALUES ('" . htmlspecialchars($_GET["firstname"]) 
				."','" . htmlspecialchars($_GET['lastname']) .  "','" . htmlspecialchars($_GET["email"]) ."','" . htmlspecialchars($_GET['message']) . "')";
				if(mysqli_query($link, $sql)){
					echo "Sent Successfully";
				}else{
					echo "ERROR " . mysqli_error($link);
				}
				}
				
				mysqli_close($link);
		?>
	</div>
</body>
</html>
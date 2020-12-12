<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100;1,400&display=swap" rel="stylesheet">
</head>

<body>

<?php
	//Prevents users from entering page besides from login page
	if(!isset($_SESSION['auth'])){
		echo "<script language='javascript'>";
		echo "alert('Incorrect Signin Information please try again')";
		echo "</script>";
		
		header("Location:login.php") ;
	}
?>
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
			<h2>Insert New Book</h2>
			<form action="admin.php" method="GET" id="form">
				<input type="text" name="booktitle" id="booktitle" placeholder="Book Title"/>
				<input type="text" name="bookauthor" id="bookauthor" placeholder="Book Author"/>
				<input type="text" name="bookyear" id="bookyear" placeholder="Book Year"/>
				<input type="submit" value="submit" id="button">
			</form>
			
			<?php
				
				$link = mysqli_connect('localhost',"root","","books");
				$link2 = mysqli_connect('localhost',"root","","contactpage");
				if($link === false){
					die("Error " . mysqli_connect_error());
				}
				if($link2 === false){
					die("Error " . mysqli_connect_error());
				}
				if(isset($_GET['booktitle']) && isset($_GET['bookyear']) && isset($_GET['bookyear'])){
				$sql = "INSERT INTO books (title, author, year) VALUES ('" . htmlspecialchars($_GET["booktitle"]) 
				."','" . htmlspecialchars($_GET['bookauthor']) .  "','" . htmlspecialchars($_GET["bookyear"]) . "')";
				if(mysqli_query($link, $sql)){
					echo "Inserted Successfully";
				}else{
					echo "ERROR " . mysqli_error($link);
				}
				}
				
				$sql4 = "SELECT id, firstname, lastname, email, message FROM messages";
				$result1 = $link2->query($sql4);
				
				if($result1->num_rows > 0){
					
					while($row = $result1->fetch_assoc()){
						echo "<div class='books'>
							<p class='from'> Message From - " .$row['firstname'] . " " . $row['lastname'] . " " . $row['email'] . "</p>
							<p class='message'>" .$row['message'] . "</p>
							<form action='admin.php' method='GET' id='form2'>
							<input type='submit' value='" .$row['id'] . "' name='deletemsg' class='button'>
							</form>
							</div>";
					}
				} else{
					echo "0 Messages";
				}
				echo "<br><br><br><br>";
				$sql2 = "SELECT id, title, author, year FROM books";
				$result = $link->query($sql2);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						echo "<div class='books'>
							<p class='title'>" .$row['title'] . "</p>
							<p class='author'>" .$row['author'] . "</p>
							<p class='year'>" .$row['year'] . "</p>
							<form action='admin.php' method='GET' id='form2'>
							<input type='submit' value='" .$row['id'] . "' name='delete' class='button'>
							</form>
							</div>";
					}
				} else{
					echo "0 Results";
				}
				
				if(isset($_GET['delete'])){
					$sql3 = "DELETE FROM books WHERE id='" . htmlspecialchars($_GET['delete']) . "'";
					if(mysqli_query($link, $sql3)){
						echo "<br> Deleted </br>";
					} else{
						echo "Error " . mysqli_error($link);
					}
				}
				if(isset($_GET['deletemsg'])){
					$sql5 = "DELETE FROM messages WHERE id='" . htmlspecialchars($_GET['deletemsg']) . "'";
					if(mysqli_query($link2, $sql5)){
						echo "<br> Deleted </br>";
					} else{
						echo "Error " . mysqli_error($link2);
					}
				}
				mysqli_close($link);
				mysqli_close($link2);
			?>
		</div>
	</div>
</body>
</html>

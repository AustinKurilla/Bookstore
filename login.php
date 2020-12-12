<?php
	session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/loginstyles.css" />
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
			<div class = "header">
				<h1>Login</h1>
			</div>
			
			<div class = "form" action="login.php" method='GET'>
				<form>
					<input type="text" id = "user" name="adminname" placeholder = "Enter Username">
					<input type="password" name="password" id = "pass" placeholder = "Enter Password">
					<input class="button" type="submit" name="login" value="Sign In" id="signin">
				</form>
			</div>
			<?php
				$adminname = 'admin';
				$adminpass = 'admin';
					
					if (isset($_GET['adminname']) && isset($_GET['password'])) {
						$username = $_GET['adminname'];
						$userpass = $_GET['password'];
						if($adminname == $username){
							if($adminpass == $userpass){
								$_SESSION['auth'] = 'loggedin' ;
								header("Location:admin.php") ;
								exit();
							}
						}
					else {
							echo "<script language='javascript'>";
							echo "alert('Incorrect Signin Information please try again')";
							echo "</script>";
							die();
						}
					}
			?>
		</div>
	</div>

</body>
</html>
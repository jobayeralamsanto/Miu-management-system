<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Miu Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b2.jpg" width="800" height="300">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					Ashulia Permanent Campus::<BR>
					Ashulia Model Town, Khagan, Ashulia, Dhaka,<BR>
					Phone: 01819245895, 01780364415,<BR>
					E-mail:  info@manarat.ac.bd<BR>
					Web Site:  www.manarat.ac.bd<br>
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p> </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>
<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Miu Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						Miu Management System is a is a complete University management software designed to automate a University diverse operations from classes, exams to Unversity events calendar. 
					</p>
					
					<p class="para">
						This University software has a powerful online community to bring parents, teachers and students on a common interactive platform. It is a paperless office automation solution for today's modern University. The Miu Management System provides the facility to carry out all day to day activities of the University.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>
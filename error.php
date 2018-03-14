<?php 
session_start()
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Error</title>
 	<?php include 'css/css.html'; ?>
 </head>
 <body>

 	<div class="form">
 		<h1>Error</h1>
 		<p>
 			<?php 
 			if( isset($_SESSION['message']) AND !empty($_SESSION['message'])) {
 			 	echo $_SESSION['message'];
 			 	unset($_SESSION['message']);
 			} else { 
 				header("location: home.php"); 
 			}
 			?>
 		</p>
 		<a href="home.php"><button class="button button-block">Home</button></a> <p></p>
 		<a href="contact.php"><button class="button button-block">Contact</button></a>
 	</div>
 
 </body>
 </html>
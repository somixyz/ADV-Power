<!DOCTYPE html>
<html>
<head>
	<title>Activities - Spring 2018</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="icon" href="images/owl.png">
	<link rel="stylesheet" type="text/css" href="css/modal.css">

</head>
<body>
<header style="background-color: #476d00">
	<div class="container">
		<section id="branding">
			<h1> <span class="highlight">ADV POWER</span></h1> 
		</section>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="#">Activities</a>
					<ul>
						<li class="current"><a href="spring2018.php">Spring 2018</a></li>
						<li><a href="daysofecology.php">Days of ecology</a></li>
						<li><a href="mountainclimbing.php">Mountaineering</a></li>
					</ul>
				</li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a>
				</li>  
				<li><a href="search.php">Search</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="backgroundImage">
<section id="about">
	<div class="container">
		<div class="dark activitiestext">
			<h1> Spring 2018 </h1>
			<p>'Spring is seen as a time of growth, renewal, of new life (both plant and animal) being born. The term is also used more generally as a metaphor for the start of better times.'</p>
			<p>This event will be played on Mount Tara in the period from March 25th to April 15th.</p>
			<p>For more information about this event you can contact us</p>
		</div>
	</div>
</section>
<aside id="sidebar">
		<div class="dark activitiestext">
			<h3>Activity plan</h3>
			<p>Departure on March 25th in the early morning hours arrival and tour of Tara</p>
			<p>If you want to join us, you can do it online by filling in the form on the button below</p>

			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

			<div id="id01" class="modal">
			  
			  <form class="modal-content animate" action="action_page2.php" method="POST">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="images/modal.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container">
			      <label for="uname"><b>Your full name</b></label>
			      <input type="text" placeholder="Enter Username" name="uname" required>

			      <label for="email"><b>Your e-mail</b></label>
			      <input type="email" placeholder="Enter e-mail" name="email" required>
			      
			       <label for="activites">Activites</label>
			       <select id="activites" name="activites">
				  	<option value="spring" selected>Spring 2018</option>
				    <option value="daysofecology" >Days of ecology</option>
				    <option value="mountainclimbing" >Mountaineering</option>  
				  </select>  

			      <button type="submit">Register now!</button>
			      
			    </div>

			    <div class="container" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			    </div>
			  </form>
			</div>
		</div> 
</aside>
<section id="imageicon">
	<div class="container">
		<div class="image">
			<img src="images/camp.png">
			<h3>C A M P I N G</h3>
		</div>
	</div>
</section>
</div>
<footer>
	<p style="font-family: Roboto">somixyz, Copyright &copy; 2018</p>
</footer>

<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
</script>
</body>
</html>
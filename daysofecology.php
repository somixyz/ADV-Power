<!DOCTYPE html>
<html>
<head>
	<title>Activities - Days of ecology</title>
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
						<li><a href="spring2018.php">Spring 2018</a></li>
						<li  class="current"><a href="daysofecology.php">Days of ecology</a></li> 
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
			<h1> Days of ecology </h1>
			<p>Join Days of ecology staff during April vacation as we explore the great Maine outdoors! Journey to the beach, salt marsh, forest, pond or garden with new friends and familiar faces -- somewhere new each day! Fun adventures, games, activities and expeditions await your young explorers.</p>
			<p>Ocean Park, Old Orchard Beach – Join us as we explore the Ocean Park Community for a week of journeys and expeditions. Each day will take us somewhere new, whether to the forest, beach, marsh, creeks, and maybe even to play some shuffleboard! Games, activities and exploration for summer days filled with fun and friends!</p>
		</div>
	</div>
</section>
<aside id="sidebar">
		<div class="dark activitiestext">
			<h3>Activity plan</h3>
			<p> <b> Ocean Park, Old Orchard Beach</b></p>
			<p> 
			Week 1 July 9-13 <p>Week 2 July 16-20</p><p>Week 3 July 30 - August 3</p><p>Weeklong tuition: $230</p>
			 </p>

			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

			<div id="id01" class="modal">
			  
			  <form class="modal-content animate" action="action_page2.php">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="images/modal.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container">
			      <label for="uname"><b>Your full name</b></label>
			      <input type="text" placeholder="Enter Username" name="uname" required>

			      <label for="email"><b>Your e-mail</b></label>
			      <input type="email" placeholder="Enter e-mail" name="email" required>
			      
			       <label for="activites" style="font-family:Times New Roman">Activites</label>
			       <select id="activites" name="activites">
				  	<option value="spring">Spring 2018</option>
				    <option value="daysofecology" selected>Days of ecology</option>
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
			<img src="images/ecology.png">
			<h3>DAYS OF ECOLOGY</h3>
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
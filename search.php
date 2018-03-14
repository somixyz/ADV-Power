<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link rel="icon" href="images/owl.png">

</head>
<body>
<header>
	<div class="container">
		<section id="branding">
			<h1> <span class="highlight">ADV POWER</span></h1> 
		</section>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li ><a href="about.php">About</a></li>
				<li><a href="#">Activities</a>
					<ul>
						<li><a href="spring2018.php">Spring 2018</a></li>
						<li><a href="ecologicalcamp.php">Ecological camp</a></li> 
						<li><a href="mountainclimbing.php">Mountaineering</a></li>
					</ul>
				</li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a>
				</li>
				 
				<li class="current"><a href="search.php">Search</a></li>
			</ul>
		</nav>
	</div>
</header>
<section id="about">
	<div class="container">
		<div class="row">
			<div>
				<p></p>
				<label for="search">Enter text to search registered participants: </label>
				<input type="text" name="query" id="query">
			</div>
			<table>
				<thead>
					<tr>
						<th>Fullname</th>
						<th>Email</th>
						<th>Activity</th>
					</tr>
				</thead>
				<tbody id="body">
					
				</tbody>
			</table>
		</div>
	</div>
</section>
<section id="imageicon">
	<div class="container">
		<div class="image">
			<img src="images/dna.png">
			<h3>COME ABOARD!</h3>
		</div>
	</div>
</section>
<footer>
	<p style="font-family: Roboto">somixyz, Copyright &copy; 2018</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#query').on('keyup', function(){
			if ( $(this).val()) {
				$.get("ajax_example.php?query=" + $(this).val(), function(data, status){
			        $('#body').html(data);
			    });
			} else {
				$('#body').html('');
			}
		
		});
	});
</script>
</body>
</html>
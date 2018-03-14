<!DOCTYPE html>
<html>
<head>
	<title>GALLERY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="icon" href="images/owl.png">
	<style > a {text-decoration : none;}</style>
</head>
<body>
<header >
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
						<li><a href="daysofecology.php">Days of ecology</a></li> 
						<li><a href="mountainclimbing.php">Mountaineering</a></li>
					</ul>
				</li>
				<li><a href="gallery.php" style="color: #6b84ad">Gallery</a></li>
				<li><a href="contact.php">Contact</a>
				</li>
				 
				<li><a href="search.php">Search</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="wrap">
	<div id="arrow-left" class="arrow"> 
</div>
	<div class="slider">
		<div class="slide slide1">
			<div class="slide-content">
				<span><a href="spring2018.php" style="color: #d8e7ff" style="text-decoration: none;">Spring 2018 - Join us</a></span>
			</div>
		</div>
		<div class="slide slide2">
			<div class="slide-content">
				<span><a href="daysofecology.php" style="color: #436eb2" style="text-decoration: none;">Renewable energy sources</a></span>
			</div>
		</div>
		<div class="slide slide3">
			<div class="slide-content">
				<span><a href="mountainclimbing.php" style="color: #2b569b" style="text-decoration: none;">Mountaineering</a> </span>
			</div>
		</div>
	</div>
	<div id="arrow-right" class="arrow"> 
	</div>
</div>

<script>
	let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// Init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();
</script>

</body>
</html>
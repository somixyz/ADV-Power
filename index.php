 
<!DOCTYPE html>
<html>
<head>
	<title>Sing-up/Login Form</title>
	<?php include 'css/css.html'; ?>
</head>
 
<body>
	<div class="form">
		<ul class="tab-group">
			<li class="tab"><a href="#signup">Sing Up</a></li>
			<li class="tab active"><a href="#login">Log In</a></li>
		</ul>
		<h1>ADV POWER</h1>
		<div class="tab-content">
			<div id="login">
				<h1> Welcome! </h1>
				<form action="index.php" method="post" autocomplete="off">
					<div class="field-wrap">
					<label>
						Email Address<span class="req">*</span>
					</label>
					<input type="email" required autocomplete="off" name="email"> 					
					</div>

					<div class="field-wrap">
						<label>
							Passwprd <span class="req">*</span>
						</label>
						<input type="password" required autocomplete="off" name="password">
					</div>

					<button class="button button-block" name="login">Log In</button>
					
				</form>
			</div>

			<div id="signup">
				<h1>Sign Up</h1>
				<form action="index.php" method="post" autocomplete="off">
					<div class="top-row">
						<div class="field-wrap">
							<label>
								First Name<span class="req">*</span>
							</label>
							<input type="text" required autocomplete="off" name="firstname">
						</div>

						<div class="field-wrap">
							<label>
								Last Name<span class="req">*</span>
							</label>
							<input type="text" required autocomplete="off" name="lastname">
						</div>

						<div class="field-wrap">
							<label>
								Email Address<span class="req">*</span>
							</label>
							<input type="email" required autocomplete="off" name="email">
						</div>			

						<div class="field-wrap">
							<label>
								Password<span class="req">*</span>
							</label>
							<input type="password" required autocomplete="off" name="password">
						</div>				

						<button type="submit" class="button button-block" name="register" >Register</button>
					</div>
				</form>
			</div>
		</div>

	</div>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

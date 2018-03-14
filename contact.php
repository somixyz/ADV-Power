


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cssform/contact.css">
<style>
body {font-family: Roboto,Arial, Helvetica, sans-serif;

    background-image: url('index1.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover; 
} 
</style>
</head>
<body>

<h3>Contact Form</h3>
<div class="main">
<div class="container">
  <form action="action_page.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lemail">Email</label>
    <input type="email" id="lemail" name="email" placeholder="Your email..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:140px" maxlength="250"></textarea>

    <input type="submit" value="Submit">
    <button class="btn" ><a href="home.php">Back Home</a> </button>
  </form>
</div>
</div>

</body>
</html>

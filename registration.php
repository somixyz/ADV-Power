<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
body {font-family: Roboto,Arial, Helvetica, sans-serif;

    background-image: url('index1.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;

}

input[type=text], select, textarea, input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    font-size: 15px;
    font-family: Roboto;
}

input[type=submit] , .btn{
    align-items: left;
    background-color: #2e38ea;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px #666;
}

input[type=submit]:hover , .btn:hover{
    background-color: #0b14ba; 
} 
.btn:active, input[type=submit]:active{
  background-color: #0b14ba;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.container {

    background: rgba(0,0,0,0.1);
    padding: 40px;
    max-width: 600px;
    margin: 110px auto;
    border-radius: 15px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3); 
    background-color: #eaf4fc;
}
@font-face{
    font-family: nekifont;
    src:url("qqq.ttf");
}
a{ 
color: white;
text-decoration: none; }
h3 {
    text-align: center;
    margin-top: 80px;
    font-size: 50px;
    color: #0138c1;
    text-shadow: 3px 2px #003182;
    font-family: nekifont;

}
</style>
</head>
<body>

<h3>Registration form</h3>
<div class="main">
<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lemail">Email</label>
    <input type="email" id="lemail" name="email" placeholder="Your email..">

    <label for="country">Activites</label>
    <select id="country" name="country">
      <option value="serbia">Spring 2018</option>
      <option value="Russia">Days of ecology</option>
      <option value="usa">Mountaineering</option>  
    </select>

    

    <input type="submit" value="Submit">
    <button class="btn" ><a href="home.php">Back Home</a> </button>
  </form>
</div>
</div>

</body>
</html>

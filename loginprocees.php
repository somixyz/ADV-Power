<?php 
    
    if(isset($_POST['password'])){
      
      $myemail = $_POST('email');
      $mypassword = $_POST('password');

      $myemail = mysqli_real_escape_string($myemail);
      $mypassword = mysqli_real_escape_string($mypassword); 
      
      mysql_connect("localhost", "root", "123");
      mysql_select_db("advpower");

      $sql = "SELECT * FROM users WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($sql) or die("Failed to query database".mysql_error());
      $row = mysqli_fetch_array($result);
      
        
      if($row['email']==$myemail && $row['password']==$mypassword) {
        echo "login succes";
         
         header("Location: home.php");
      }else {
         echo "Field to login";
      }
   }
 ?>
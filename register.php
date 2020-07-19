<?php


 session_start();
$con=mysqli_connect('localhost','root','','food_recipe');

if(isset($_POST['submit']))
{
    $email=  $_POST['email'];
    $username=$_POST['name'];
     $age=$_POST['age'];
  	$password= $_POST['password'];
    $pass=md5($password);
    $query="SELECT * FROM `registered` WHERE `email` = '$email' AND `password`='$pass'";
    $run=mysqli_query($con,$query);
  	$row=mysqli_num_rows($run);
    	if($row==1)
    	   echo '<script>alert("email already exists")</script>';
      else {
        $query1="INSERT INTO `registered`( `name`, `email`,`age`, `password`) VALUES ('$username','$email','$age','$pass')";
        $run1=mysqli_query($con,$query1);
        echo '<script>alert("Registered Successfully")</script>';
      }
}



?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid text-center">
        <h1 class="text-white text-center  bg-success" style="font-size: 55px;">Create Your Account Here</h1>
        <a href="login.php" class="text-white">Back to login</a>
      
    </div>
  </nav>
  <div class="container"><br>
    
    <div class="col-lg-6 m-auto d-block">
      
      <form action="r.php" onsubmit="return validation()" class="bg-light" method="post">
        
        <div class="form-group">
          <label for="user" class="font-weight-bold"> Username: </label>
          <input type="text" name="name" class="form-control" id="name" autocomplete="off" required>
          <span id="username" class="text-danger font-weight-bold"> </span>
        </div>

       
       

        <div class="form-group">
          <label class="font-weight-bold"> Age: </label>
          <input type="text" name="age" class="form-control" id="age" autocomplete="off" required>
          <span id="mobileno" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
          <label class="font-weight-bold"> Email: </label>
          <input type="text" name="email" class="form-control" id="email" autocomplete="off" required>
          <span id="emailids" class="text-danger font-weight-bold"> </span>
        </div>

         <div class="form-group">
          <label class="font-weight-bold"> Password: </label>
          <input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
          <span id="passwords" class="text-danger font-weight-bold"> </span>
        </div>


        <input type="submit" name="submit" value="submit" class="btn btn-success"   autocomplete="off">


      </form><br><br>


    </div>
  </div>



  <script type="text/javascript">
    

    function validation(){

      var user = document.getElementById('name').value;
      var pass = document.getElementById('password').value;
      var mobileNumber = document.getElementById('age').value;
      var emails = document.getElementById('email').value;





      if(user == ""){
        document.getElementById('username').innerHTML =" ** Please fill the username field";
        return false;
      }
      
      if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** only characters are allowed";
        return false;
      }







      if(pass == ""){
        document.getElementById('passwords').innerHTML =" ** Please fill the password field";
        return false;
      }
      if((pass.length <= 5) || (pass.length > 20)) {
        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
        return false; 
      }


    



      if(mobileNumber == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
        return false;
      }
      if(isNaN(mobileNumber)){
        document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
        return false;
      }
      if(mobileNumber.length>2){
        document.getElementById('mobileno').innerHTML =" ** Age should be 2 digit or 1 digit";
        return false;
      }



      if(emails == ""){
        document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
        return false;
      }
      if(emails.indexOf('@') <= 0 ){
        document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
        return false;
      }
    }

  </script>
<footer class="page-footer font-small cyan darken-3 bg-success">
  <div class="container">
    <center>
      <br>
      <br>
        <div class="mb-5 flex-center">
          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </center>
  </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: KSsquare.com
  </div>



</footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
<?php
session_start();
$con=mysqli_connect('localhost','root','','food_recipe');

 
?>
<!--DOCTYPE html-->
<html>
<head>
  <title>recipes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet"> 
  <style >.container{
      background-color:(220, 20, 60);
    }
    
   
   .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .cf {
    margin-top: 10px;
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .list-group-item{
    background-color:  #1abc9c;
  }
  .headi{
    color:;

  }
  #img{
    border-radius: 20px;
    height:40rem;


  }
  .dis{
    color:red;
  }
  #bor{padding:20px;
    border: 2px solid black;
    border-radius: 15px;
    height:"100%";
  }
  #cont{
    color:white;
    padding:10px;
    border-radius: 15px;
    background-color:  #1abc9c;
  }

</style>
</head>
<body>





<div class="nav">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YUMMY-TO</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="food.php">Home</a></li>
      <li ><a href="suggest.php">SUGGEST</a></li>
      <li class="active"><a href="allrecipe.php">ALL RECIPES</a></li>
      <li ><a href="aboutus.php">ABOUT US</a></li>
          <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
</nav>>
</nav>
<h3  class="text-center headi">ALL RECIPES</h3>
<br>
<br>

<?php

$query="SELECT * FROM `temp_suggesion` ,`registered` where  `temp_suggesion`.`flag`=1 and `temp_suggesion`.`f_id`=`registered`.`r_id`";
$run=mysqli_query($con,$query);
  if(mysqli_num_rows($run)>0){
   while($row=mysqli_fetch_assoc($run))
   { 
    //print_r($row);
 ?>
<div class="container text-center">
  <div id="bor" class="row">
    <div class="col-sm-5 ">
          <img id="img" src="<?php echo  $row['img'] ;?>" alt="loding" class="img-responsive card-img" >
          <p ><?php echo $row['recipename']; ?>
    </div>
    <div class="col-sm-7  bor">
         <div class="row">
            <div class="col-sm-12 ">
            <h3 class="headi"><b><?php echo $row['recipename']; ?></b></h3>
            </div>
          </div>

         <div class="row">
           <div class="col-sm-12 ">
            <h4 class="dis">Ingridents:</h4>
            <p><?php echo $row['ingredients']; ?></p>
           </div>
         </div>


         <div class="row">
           <div class="col-sm-12 ">
            <h4 class="dis">Method :</h4>
            <p><?php echo $row['recipe']; ?></p>
           </div>
         </div>


         <div class="row">
                   <div class="col-sm-6 ">
                    <h4 class="dis" >Contibuted by:</h4>
                    <p id="cont"><?php echo $row['name']; ?></p>
                   </div>
                  
                   <!--<div class="col-sm-6 ">
                    <h4>Rate me:</h4>
                 </div>-->
        </div>

    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




  

<?php }} ?>

 <!-- Footer -->
<footer class="cf bg-4 text-center">
  <p>Contact us for more details  on : <a href="kalashkimigmail.com">Our Email</a></p> 
</footer>
</body>
</html>


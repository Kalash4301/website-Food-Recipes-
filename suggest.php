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
	<style>
   
   .container{
      background-color:(220, 20, 60);
    }
    
   #first{
    border-radius: 20px;
    padding:10px 10px;
    background-image: url("bkimg/food3.jpg");
    color: white;
   } 
   #second{
    border:2px solid black;
   }
   #suggesionlist{
     background-color:#474e5d;
     color: white;
     border-radius: 20px;
     padding: 10px;

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
  #notic{
    background-color: silver;
    padding:2px;
    margin:10px;
    border-radius: 10px;
    text-align: center;
  }
  </style>
	
</head>
<body>

   <?php
      if(isset($_POST['submit']))
      {     
            $ingredients=$_POST['ingredients'];
            $recipename=$_POST['recipename'];
            $recipe=$_POST['recipe'];

           $filename=$_FILES['fileupload']['name'];
            $tempname=$_FILES['fileupload']['tmp_name'];
            $folder="recipeimages/.$filename";
           
            move_uploaded_file( $tempname,  $folder);
            
          $k=$_SESSION['person_id'] ;
 
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
    
        //$query1="INSERT INTO login(  email,name, password,gender) VALUES ('hjh@gmail.com','nnnn','ijnn','vnbnbn')";
        $query2 ="INSERT INTO  `temp_suggesion`(`recipename`,`ingredients`,`recipe`,`img`,`f_id`) VALUES ('$recipename','$ingredients','$recipe' ,'$folder','$k')";
              
              $run1=mysqli_query($con,$query2);

              if($run1)
              { 
                echo '<script>alert("Submitted Successfully")</script>';

                
              }
              else
                echo "bye";
              
              


      }
      

    
      ?>
  
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YUMMY-TO</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="food.php">Home</a></li>
      <li class="active"><a href="suggest.php">SUGGEST</a></li>
      <li><a href="allrecipe.php">ALL RECIPES</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="login.php">Logout</a></li>
      
    </ul>
  </div>
</nav>


	<div class="container">
    <div class="row">
        <div class="col-sm-8" id="first">
           

		<h2><b>Suggestion</b></h2>
        <form action="suggest.php" method="post" enctype="multipart/form-data">

          
        

        


         <div class="form-group">
          <label for="name"><b>RECIPE NAME</b></label>
            <input type="text" class="form-control"name="recipename" required>

        </div>

        <div class="form-group">
          <label for="recipe"><b>ENTER INGREDIENTS</b></label>
            <textarea rows="5" column="5" class="form-control" name="ingredients" required></textarea>
         </div>


         <div class="form-group">
          <label for="recipe"><b>ENTER RECIPE</b></label>
            <textarea rows="10" column="10" class="form-control" name="recipe" required></textarea>
         </div>


       
        
        
        <div class="form-group">
        <label for="fileupload"> Select a file to upload </label>
		<input type="file" name="fileupload" value="fileupload" id="fileupload">
		</div>

		<br>
		<div>
			<button type="submit" class="btn btn-success" name="submit" >Submit</button> 
        </div>
      </form>

        </div>
        
       
        <div class="col-sm-3">
        <div id="nav2">

          <h3> Also Shared their recipies </h3>
            <p id="suggesionlist">
            
                               <?php

                       $query="SELECT DISTINCT `name` , `email`  FROM `registered`,`temp_suggesion` where `temp_suggesion`.`f_id`=`registered`.`r_id`";
                                 //(SELECT name,email FROM 'suggesion' ORDER BY id DESC )ORDER BY id ASC;

                       $run=mysqli_query($con,$query);
                      
                       $oo=mysqli_num_rows($run);
                       if($oo){
                       while($row=mysqli_fetch_assoc($run))
                       {
                           echo $row['name']."<br>";
                           echo $row['email']."<br>";
                          

                       }
                     }
                       
                     ?>
                </p>
            
            <br>
        </div>
         </div>
         <div class="row">
          <div class="col-xs-12">
         <p id="notic"> Instruction: Only shortlisted recipes will get displayed on website.</p>
       </div>
     </div>
       <!-- <div class="form-group">
          <label for="image"><b>Image</b></label>
            <input type="Image" class="form-control" name="image" required>
        <input type="image" class="form-control" name="image" required src="/wp-content/uploads/sendform.png" alt="Submit" width="100">
		-->


	</div>
  </div>
  <!-- Footer -->
<footer class="cf bg-4 text-center">
  <p>Contact us for more details  on : <a href="kalashkimigmail.com">Our Email</a></p> 
</footer>
 



</body>
</html>

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
  .alin{
    text-align: center;
   
    background-color:silver;
    
  }


  
  </style>
  
</head>
<body>

  

    
      
  
  
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YUMMY-TO</a>
    </div>
    <ul class="nav navbar-nav">
     
      <li><a href="login.php">Logout</a></li>
      <li class="active"><a href="adminpage.php">Admin</a></li>
      <li><a href="delete.php">Delete</a></li>
      
    </ul>
  </div>
</nav>
<br>
<br> 
<div class="row">
  <div class="col-ss-12">
 <p class="alin text-center">Pending  Recipes:</p>
<?php  $query3="SELECT `t_id` FROM `temp_suggesion` where `temp_suggesion`.`flag`=2 ";
$run=mysqli_query($con,$query3);
  if(mysqli_num_rows($run))
  {  //$row=mysqli_fetch_assoc($run);
    
    //print_r($row);
    while ($row=mysqli_fetch_assoc($run)) {?>
 


    <p class="alin text-center" > <?php echo $row['t_id'];?></p>
      
      <?php 
  }}
  else  {?>

    <p class="alin">No Recipes Pending</p>
  
  <?php
    }    

  ?>  
  </div></div>  

          <div class="container">
    <div class="row">
        <div class="col-sm-12" >
        <form  action="adminpage.php" method="post">
        <div class="form-group">
          <label for="name"><b>Search id</b></label>
            <input type="text" class="form-control searchbox" placeholder="Enter id "name="id" id="id">

        </div>

        <div> 
      <button type="submit" class="btn btn-success form-control" name="search" id="searchdata" value="search" >Search</button> 
        </div>

       </form>
     </div>
     </div>
     </div>

 <?php
 

 if(isset($_POST['search']))
        {

          $_SESSION['id']=$_POST['id'];  
          $id=$_SESSION['id']; 

$query="SELECT * FROM `temp_suggesion` where `temp_suggesion`.`t_id`='$id' ";
$run=mysqli_query($con,$query);
  if(mysqli_num_rows($run)>0){
   while($row=mysqli_fetch_assoc($run))
   { 
 

 ?>


  <div class="container">
    <div class="row">
        <div class="col-xs-12" >
           

    
        <form action="adminpage.php" method="post" >

        


         <div class="form-group">
          <label  for="name"><b>RECIPE NAME</b></label>
            <input type="text" class="form-control "name="recipename" value="<?php echo  $row['recipename'] ;?>" required>

        </div>


        <div class="form-group">
          <label for="ingredients"><b>INGREDIENTS </b></label>
            <input  type="text" class="form-control" name="ingredients" value="<?php echo  $row['ingredients'] ;?>"  required>
         </div>



         <div class="form-group">
          <label for="recipe"><b> RECIPE</b></label>
            <input   type="text" class="form-control" name="recipe" value="<?php echo  $row['recipe'] ;?>"  required>
         </div>


       
        
        
        <div class="form-group">
        <label for="fileupload">Picture:</label>
    <input type="text" name="fileupload" class="form-control"  value="<?php echo  $row['img'] ;?>">
    </div>

    <br>
    </div>
     </div>
    <div class="row">
      <div class="col-xs-12">
      <div class="col-xs-6">
    
      <button type="submit" class="btn btn-success  " name="submit" >Approve</button> 
        
      </div>
      <div class="col-xs-6">
    
      <button type="submit" class="btn btn-danger " name="reject" >Reject</button> 
        
        </div>
        </div>
        </div>
      </form>
        
        
       
       <!-- <div class="form-group">
          <label for="image"><b>Image</b></label>
            <input type="Image" class="form-control" name="image" required>
        <input type="image" class="form-control" name="image" required src="/wp-content/uploads/sendform.png" alt="Submit" width="100">
    -->


  
  </div>

<?php }}


 }
  // echo  $id;

 if(isset($_POST['submit']))
      {     
            $ingredients=$_POST['ingredients'];
            $recipename=$_POST['recipename'];
            $recipe=$_POST['recipe'];
            $flag=1;
           $id=$_SESSION['id'];
            
          
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
    
        //$query1="INSERT INTO login(  email,name, password,gender) VALUES ('hjh@gmail.com','nnnn','ijnn','vnbnbn')";
        $query5 ="UPDATE `temp_suggesion` SET `recipename`='$recipename' ,`ingredients`='$ingredients',`recipe`='$recipe' ,`flag` = '$flag' WHERE `temp_suggesion`.`t_id` = '$id'";
        //"INSERT INTO  `temp_suggesion`(`recipename`,`ingredients`,`recipe`,'flag') VALUES ('$recipename','$ingredients','$recipe' ,'$flag')  where `t_id`='id'";
              
              $run1=mysqli_query($con,$query5);

              if($run1)
              { 
                echo '<script>alert("Approved-Successfully")</script>';

                
              }
              else
                echo "bye";
              
              
       header("refresh:05;  url=adminpage.php");

      }

      if(isset($_POST['reject']))
      {     
             $id=$_SESSION['id'];
           
          
            $flag=0;
            
 
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
           //UPDATE `temp_suggesion` SET `flag` = '0' WHERE `temp_suggesion`.`t_id` = 2;
        //$query1="INSERT INTO login(  email,name, password,gender) VALUES ('hjh@gmail.com','nnnn','ijnn','vnbnbn')";
        $query2 ="UPDATE `temp_suggesion` SET `flag` = '$flag' WHERE `temp_suggesion`.`t_id` = '$id'";
              
              $run1=mysqli_query($con,$query2);

              if($run1)
              { 
                echo '<script>alert("Rejected-Successfully")</script>';

                
              }
              else
                echo "bye";
              
              
          header(" refresh:00 ;  url = adminpage.php");
          

      }

 

 ?>
  <!-- Footer -->
<footer class="cf bg-4 text-center">
  <p>Contact us for more details  on : <a href="kalashkimigmail.com">Our Email</a></p> 
</footer>
 



</body>
</html>

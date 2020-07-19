<?php
session_start();
$con=mysqli_connect('localhost','root','','food_recipe');



if(isset($_POST['delete']))
      {     
             $id=$_POST['id']; 
              $conf=$_POST['confirm']; 
         
          if($conf==1)
        {
            
          

         
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
           //UPDATE `temp_suggesion` SET `flag` = '0' WHERE `temp_suggesion`.`t_id` = 2;
        //$query1="INSERT INTO login(  email,name, password,gender) VALUES ('hjh@gmail.com','nnnn','ijnn','vnbnbn')";
              $query5 ="DELETE FROM `temp_suggesion` WHERE `temp_suggesion`.`t_id` = '$id'";
              
              $run5=mysqli_query($con,$query5);

              if($run5)
              { 
                echo '<script>alert("Deleted-Successfully")</script>';

                
              }
              else
                {}
        }
        else
        {  

        }
              
          //header(" refresh:00 ;  url = delete.php");
          

      }
      


       if(isset($_POST['undisplay']))
      {     
             $id=$_POST['id'];
          
            $flag=2;
            $query7 ="SELECT flag from `temp_suggesion` WHERE `temp_suggesion`.`t_id` = '$id'";
            $run7=mysqli_query($con,$query7);
            $row=mysqli_fetch_assoc($run7);
            
              if($row['flag']==2)
              echo'<script>alert("Already Undisplayed")</script>';
              else
              {
              $query6 ="UPDATE `temp_suggesion` SET `flag` = '$flag' WHERE `temp_suggesion`.`t_id` = '$id'";
              
              $run6=mysqli_query($con,$query6);

              if($run6)
              { 
                echo '<script>alert("Undisplayed Successfully")</script>';

                
              }
              else
                echo "bye";

              }
            
 
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
           //UPDATE `temp_suggesion` SET `flag` = '0' WHERE `temp_suggesion`.`t_id` = 2;
        //$query1="INSERT INTO login(  email,name, password,gender) VALUES ('hjh@gmail.com','nnnn','ijnn','vnbnbn')";
       
              
              
          //header(" refresh:00 ;  url = delete.php");
          

      }


 
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
   color:white;
   border-radius: 5px;
    background-color:tomato;
    
  }
  .green{
     text-align: center;
     color:white;
     border-radius: 5px;
    background-color:green;
    
  }
  .silver{
    text-align: center;
    border-radius: 5px;
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
      <li ><a href="adminpage.php">Admin</a></li>
      <li class="active"><a href="delete.php">Delete</a></li>
      
    </ul>
  </div>
</nav>
<br>
<br> 

<div class="container text-center">
<div class="row">
  <div class="col-md-12">

 
  <div class="col-md-6">
 <p class="silver text-center">Recipes:</p>
<?php  $query3="SELECT `t_id`,`recipename`,`flag` FROM `temp_suggesion` ";
$run=mysqli_query($con,$query3);
  if(mysqli_num_rows($run))
  {  //$row=mysqli_fetch_assoc($run);
    
    //print_r($row);
    while ($row=mysqli_fetch_assoc($run)) {
 
 
    if( $row['flag'] == 1){?>
    <p class="green text-center" > <?php echo $row['t_id']." ".$row['recipename'];?></p>
  <?php }
    else  { ?>
    <p class="alin text-center" > <?php echo $row['t_id']." ".$row['recipename'];?></p>
      
      <?php }
  } }
  else  { ?>

    <p class="silver">No Recipes Pending</p>
  
  <?php
    }    

  
  

     

 ?>
    
</div>

    
      <div class="col-md-6 text-center">

      <form action="delete.php" method="post" >
        <div class="form-group">
          <label for="ingredients"><b>Enter Id: </b></label>
            <input  type="number" class="form-control" name="id" placeholder="id" required>
         </div>

        <div class="row">
          <div class="col-xs-12">
          <div class="col-xs-6">
        
          <button type="submit" class="btn btn-success  " name="undisplay" >Undisplay</button> 
            
          </div>
          <div class="col-xs-6">
        <input type="hidden" name="confirm" id="confirm" value="">
          <button type="submit" class="btn btn-danger " name="delete" onclick="confirmf()" >Delete</button> 
            
            </div>
            </div>
            </div>
     </form>

    
    </div>

</div>
</div>


</div>

<!--<div class="row">
  <div class="col-xs-6">

      <form action="adminpage.php" method="post" >
        <div class="form-group">
          <label for="ingredients"><b>Enter Id: </b></label>
            <input  type="text" class="form-control" name="ingredients" placeholder="id" required>
         </div>

        <div class="row">
          <div class="col-xs-12">
          <div class="col-xs-6">
        
          <button type="submit" class="btn btn-success  " name="undisplay" >Undisplay</button> 
            
          </div>
          <div class="col-xs-6">
        
          <button type="submit" class="btn btn-danger " name="delete" >Delete</button> 
            
            </div>
            </div>
            </div>
     </form>

</div>
</div> -->




  <!-- Footer -->
<footer class="cf bg-4 text-center">
  <p>Contact us for more details  on : <a href="kalashkimigmail.com">Our Email</a></p> 
</footer>
 <script>
  function confirmf(){
    var r=confirm("Are you sure?");
    if(r==true)
    { console.log("he");
      document.getElementById('confirm').value=1;
    }
    else
    {  console.log("hey");
      document.getElementById('confirm').value=0;
    }
  }
</script>


</body>
</html>

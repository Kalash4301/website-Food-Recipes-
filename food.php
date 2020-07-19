<!--!DOCTYPE html-->
<html>
<head>
  <title>
    home
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet"> 
  <style >
    .blink{
     
      font-size: 5rem;
       animation: blinkingText 2s infinite;
      font-family: 'Merriweather', serif;
    }

      @keyframes blinkingText {
            from {
                opacity: 1;
                color : pink;
                }
            to {
                opacity: 1;
                color : yellow;
                }
     .yam{
      color: red;
      font-family:  'Balsamiq Sans', cursive;
      font-size: 10rem;
     }
    .tit{
      font-family:  'Balsamiq Sans', cursive;
      font-size: 3rem;
    }
 
       
  </style>

  
</head>
<body>
 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand yam" >YUMMY-TO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="suggest.php">SUGGEST</a></li>
      <li><a href="allrecipe.php">ALL RECIPES</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="bkimg/food1.jpg" alt="New York">

      <div class="carousel-caption">
        <div class="row">
        <div class class="col-xs-12">
           <br>
                
                <div class="row">
                     <div class class="col-xs-4">
                          <div class="blink">
                          <p><b>if you are cooking enthusiastic and you are looking for new recipes then you are at right place.</b></p>
                          </div>
                           
                     </div>
                 </div>
                 
                
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 
                 <div class="row">
                      <div class class="col-xs-8">
                        <div class="tit">
                             <p><b>“Cookery is not chemistry. It is an art. It requires instinct and taste rather than exact measurements.”</b> </p>
                             <p>– Marcel Boulestin.</p>
                       
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
                 
       </div>
       </div>
      </div>
                 
    </div>
    <div class="item">
      <img src="bkimg/food7.jpg" alt="New York">

      <div class="carousel-caption">
        <div class="row">
        <div class class="col-xs-12">
                <div class="row">
                     <div class class="col-xs-4">
                        <div class="blink">
                          <p><b>Suggest us recipes , GOOD recipes will get added Here .</b></p>
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
                 <br>
                 
                 
                 <div class="row">
                      <div class class="col-xs-8">
                          <div class="tit">
                              <p><b>“A recipe has no soul, You as the cook must bring soul to the recipe.”</b></p>
                                 <p> - Thomas Keller.</p>
                              
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
                 
       </div>
       </div>
      </div>
                 
    </div>
    

    

    <div class="item">
      <img src="bkimg/food8.jpg" alt="New York">

      <div class="carousel-caption">
        <div class="row">
        <div class class="col-xs-12">
                <div class="row">
                     <div class class="col-xs-4">
                        <div class="blink">
                          <p>Grab all recepics and try it out</p>
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
                 <br>
                 
                 
                 <div class="row">
                      <div class class="col-xs-8">
                              <div class="tit">
                              <p><b>"The secret of success in life is to eat what you like and let the food fight it out inside .” </b></p>
                              <p>- Mark Twain.</p> 
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
                 
       </div>
       </div>
      </div>
                 
    </div>
    

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>






</body>
</html>
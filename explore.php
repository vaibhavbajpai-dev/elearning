<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

    #myCarousel {
        margin: 40px;
        height: 500px;
        width: 800px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

  </style>
</head>
<body>

    <div class="container">
  <h2>Explore the Categories</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <a href="#mapp">
            <img src="android_app_development.jpg" alt="android_app_development" style="height:500px; width:100%;">
        </a>  
        <div class="carousel-caption">
          <h3>Mobile App Development</h3>
          <p>Make your own Mobile Applications.</p>
        </div>
      </div>

      <div class="item">
        <a href="#mapp">
            <img src="language_learning.jpg" alt="language_learning" style="height:500px; width:100%;">
        </a>
        <div class="carousel-caption">
          <h3>Language Learning</h3>
          <p>See to the different languages of the world!</p>
        </div>
      </div>

      <div class="item">
        <a href="#mapp">
            <img src="web_development.jpeg" alt="web_development" style="height:500px; width:100%;">
        </a>
        <div class="carousel-caption">
          <h3>Web Development</h3>
          <p>Learn to develop your own websites.</p>
        </div>
      </div>

      <div class="item">
        <a href="#mapp">
            <img src="programming_languages.jpg" alt="programming_languages" style="height:500px; width:100%;">
        </a>
        <div class="carousel-caption">
          <h3>Programming Languages</h3>
          <p>Know the power of Computer Languages.</p>
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

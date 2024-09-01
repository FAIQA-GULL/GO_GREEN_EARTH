

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    /*background: #aaa;*/
  }
  .fakeimg img {
    height: 200px;
    /*background: #aaa;*/
  }
  .jumbotron{
  height: 50%;

  background: url("pic/leaf.jpg") no-repeat center center/cover ;
  /*object-fit: cover;*/
}
.jumbotron h1{
  
  /*sfont-size: 3.5rem;*/
  color: #614119;
}
.jumbotron p{

  /*font-size: 1.5rem;*/
  color: #614119;
}

/*flip card design css*/

.flip-card {
  background-color: transparent;
  width: 150px;
  height: 150px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #ffff;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>A tree is known by its fruit;</h1><h1>  A Man by his deeds</h1>
  <p>Flower will not grow, if the stem doesn't allow.</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="plant_modal.php">Plants Modal</a></li>
        <li><a href="activity.php">My Activities</a></li>
        <li><a href="activity.php">My Activities</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="about_us.php">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">
      <!-- Fake Image -->
      <a href="profile.php"><img src="pic/avatar.png"></a>
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>


    <!-- ========================================== -->

    <div class="col-sm-8">
      <h2>  About Our Team</h2>
      <h5>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit</h5>
      <div class="container">
        <div class="col-sm-2">
          <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="pic/test.jpg" alt="Avatar" style="width:150px;height:150px;">
            </div>
          <div class="flip-card-back">
            <!-- <h1>Service 1</h1> -->
            <p>Architect & Engineer</p>
            <p>We love that guy</p>
          </div>
          </div>
          </div>
        </div>
      
      <!-- ============================ -->
        <div class="col-sm-2">
          <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="pic/t1.jpg" alt="Avatar" style="width:150px;height:150px;">
            </div>
          <div class="flip-card-back">
            <!-- <h1>Service 1</h1> -->
            <p>Architect & Engineer</p>
            <p>We love that guy</p>
          </div>
          </div>
          </div>
        </div>
      

      <!-- ============================ -->

        <div class="col-sm-2">
          <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="pic/test5.jpg" alt="Avatar" style="width:150px;height:150px;">
            </div>
          <div class="flip-card-back">
            <!-- <h1>Service 1</h1> -->
            <p>Architect & Engineer</p>
            <p>We love that guy</p>
          </div>
          </div>
          </div>
        </div>
    </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <!-- <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

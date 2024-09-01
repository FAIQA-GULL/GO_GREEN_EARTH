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
        <li class="active"><a href="main_page.php">Home</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>




<!-- ================================================================= -->


<!-- <div class="container">
  <div class="row">
    <h1>Plants modal</h1>
    <div class="col-sm-8">
      <div class="col">
      <h1> Modal 1</h1>
      <h3> Money Plant</h3>
      
      <img src="">

      <p></p>
    </div>

    <div class="col">
      modal 2 
    </div>

    <div class="col ">
      modal 3
    </div>

    <div class="col ">
      modal 4
    </div>

    <div class="col "> modal 5</div>

    <div class="col ">modla 6</div>
    

      </div>

  </div>
</div> -->



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
      <!-- <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul> -->
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>


    <!-- ============================================================= -->
    <div class="col-sm-8">
      <form>
      <h1>Plants Model</h1>
      <h3> Modal 1</h3>
      <!-- <h5> Money Plant</h5> -->
      
      <div class="fakeimg">
      
      <img src="pic/money.jpg">
      </div>
      <h4>Money Plant</h4>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button class="btn btn-success">Follow</button>
      </form>
      <br>
      
      <h3> Modal 2</h3>
      <h5> ZZ Plant</h5>
      <div class="fakeimg">
      Fake Image
      <img src="pic/zz plant.jpg">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button>Follow</button>

      <br>
      
      <h3> Modal 3</h3>
      <h5> Areca-Palm </h5>
      <div class="fakeimg">
      Fake Image
      <img src="pic/areca-palm.jpg">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button>Follow</button>

      <br>
      
      <h3> Modal 4</h3>
      <h5> culinary herb</h5>
      <div class="fakeimg">
      Fake Image
      <img src="pic/culinary herb.jpg">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button>Follow</button>

      <br>
      
      <h3> Modal 2</h3>
      <h5> ZZ Plant</h5>
      <div class="fakeimg">
      Fake Image
      <img src="pic/zz plant.jpg">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button>Follow</button>

      <br>
      
      <h3> Modal 2</h3>
      <h5> ZZ Plant</h5>
      <div class="fakeimg">
      Fake Image
      <img src="pic/zz plant.jpg">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button>Follow</button>

    </div>
  </div>
</div>
























<!-- ================================================================= -->




















<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

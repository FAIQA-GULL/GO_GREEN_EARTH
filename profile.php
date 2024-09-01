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


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">
      <!-- Fake Image -->
      <img src="pic/avatar.png">
      <!-- <input type="file" name="" value="<img src='pic/avatar.png'>"> -->
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <span class=""></span>
      <label>Update Image</label>
      <input type="file" class="form-control" name="">
      <!-- <h3>Some Links</h3> -->
      <!-- <p>Lorem ipsum dolor sit ame.</p> -->
      <!-- <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul> -->
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>

    <div class="col-sm-8">
      <h2>My Information </h2>
      <h5>Title description</h5>
      <!-- <div class="fakeimg">Fake Image</div> -->
      <!-- <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
      <div class="row">
        <div class="col">

      <label>First Name : </label><input type="text" class="form-control" name=""><br>
      <label>Last Name : </label><input type="text" class="form-control" name=""><br>
      <label>Email : </label><input type="text" class="form-control" name=""><br>
      

        </div>
      </div>


      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

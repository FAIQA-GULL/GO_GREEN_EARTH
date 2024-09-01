<?php
include('conn.php');

?>

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
        <li><a href="plant_modal.php">Plants Modal</a></li>
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
      <a href="profile.php"><img src="pic/avatar.png"></a>
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Check Report</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills nav-stacked">

      	<!-- <?php
				$sql="SELECT * FROM activity
				WHERE DATE(date) = DATE(NOW())";
				$catquery=$conn->query($sql);
				while($catrow=mysqli_fetch_array($catquery)){
				
					$catid = isset($_GET['category']) ? $_GET['category'] : 0;
					$selected = ($catid == $catrow['act_id']) ? " selected" : "";
					echo "<option$selected value=".$catrow['act_id'].">".$catrow['act_name']."</option>";
				}
		?> -->


	<form action="activity.php" method = "POST">

      <label class="h-secondary">Start Date</label>
		<input type="date"  class="form-control is-valid" name="startdate">
		<label class="h-secondary">End Date</label>
        <input type="date"  class="form-control is-valid" name="enddate" >
        <label class="h-secondary">User Name</label>
	
        <input type="text" value="<?php echo $username; ?>"readonly  class="form-control is-valid" name="empname" >

       	<button type="submit" name= "search"  class="btn btn-outline-primary">Search </button>

    </form>





        <!-- <li class="active"><a href="#">Daily</a></li>
        <li><a href="#">Weekly</a></li>
        <li><a href="#">Monthly</a></li> -->
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>











    <!-- ========================================================= -->
    <div class="col-sm-8">
      <!-- <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br> -->


      <!-- ==================================== -->
      <h2> My Activities</h2>
<!-- 
<div class="row">
  <div class="col-md">

      <select id="catList" class=" form-control">
        <option value="0"></option>

        <?php
				$sql="SELECT * from activity";
				$catquery=$conn->query($sql);
				while($catrow=mysqli_fetch_array($catquery)){
				
					$catid = isset($_GET['category']) ? $_GET['category'] : 0;
					$selected = ($catid == $catrow['class_id']) ? " selected" : "";
					echo "<option$selected value=".$catrow['act_id'].">".$catrow['act_name']."</option>";
				}
				?>
       
       
      </select>
  </div>
</div>  -->


    <table class="table table-hover table-striped table-bordered">
        <thead>
          <tr>
            <th>Sr.no</th>
            <th>Modal Followed </th>
            <th>Plant Name</th>
            <th>Plant Type </th>
            <th>Plant Age</th>
            <th>Growth Detail</th>
            <th></th>
          </tr>
        </thead>


        <?php

        if(isset($_POST['search'])) {     

        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $empname = $_POST['empname'];

        $sql = "SELECT * from activity WHERE cdate BETWEEN  '$startdate' AND '$enddate' ORDER BY cdate";
        
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)

        {


        ?>



         <?PHP
        $sno = 1;
        //OUTPUT DATA OF EACH ROW
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tbody>
          <tr>
            <td>1</td>
            <td>Coulinary Herbs</td>
            <td><?php echo $row['act_name'];?> </td>
            <td>Lettuces</td>
            <td>1 day</td>
            <td><a href="">modal</a></td>

          </tr>
        </tbody>
  
        <?php
            }
        }else
            { 
        ?>
        <h4><center>0 RESULTS</center></h4>
        
        <?php }
        }

        ?>

    </table>

      <!-- ==================================== -->

<hr>


     <!--  <h2 align="center">My All Activities</h2> -->
      <h5></h5>

      <!-- <form>

      <label >Start Date</label>
		<input type="date" value="correct value" class="form-control is-valid" name="startdate" id="inputValid">
		<label>End Date</label>
		<input type="date" value="correct value" class="form-control is-valid" name="enddate" id="inputValid">
        <label>Employee Name</label>
		<input type="text"  class="form-control is-valid" name="empname" placeholder="Enter Employee Name" id="inputValid">
		
		<button type="submit" name= "search"  class="btn btn-primary btn-outline-primary">Search Orders By Date</button>

      </form> -->


      <!-- <div class="fakeimg">Fake Image</div> -->
      <!-- <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

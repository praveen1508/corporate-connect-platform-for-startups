<?php
include('db.php');
session_start();
//$pide=$_POST['pid'];
//$_SESSION['kg']=$pide;
$pkid=$_SESSION['uname'];
$q="select Project_id,Project_name from project where Project_id IN (select Project_id from projectidea where Company = '$pkid')";
//$q="select Project_id from projectidea where Company='DV Solutions'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
?>
<html>
    <head>
  <title>Project Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .table {
    border-radius: 5px;
    width: 50%;
    margin: 30px;
    float: center;
   }
   .navbar-default {
   background-color:rgb(92, 0, 128);
   border-color: whitesmoke;

}
   </style>
</head>
    <body>
    <nav class="navbar navbar-default fixed-top navbar-expand-lg navbar-light purple scrolling-navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white"><i>CORP CONNECT<i></a>A> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.html" style="color:white">Home</a></li>
        <li><a href="viewproject.php" style="color:white">View Projects</a></li>
        <li><a href="viewstatus.php" style="color:white">View Status</a></li>
        <li><a href="./blog/discuss.php" style="color:white">Discuss</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" style="color:white"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
       </ul>
      </div>
  </div>
</nav>
        </div>
        <br/><br/><br/><br/><br/><br/>
        </div>
        <div>
     <table class="table table-condensed">
    <thead>
      <tr>
        <th>Project Id</th>
        <th>Project Name</th>
      </tr>
    </thead>
    <tbody>
       
      <?php
    while ($row = mysqli_fetch_array($r)) :

        ?>
        <tr>
            <td><?php echo $row[0]; ?></td> 
            <td><?php echo $row[1]; ?></td> 
        </tr>
        <?php endwhile; ?>
    </tbody>
    </table>
            </div>
            <br>
            <br>
  </div>
  <div class="row">
    <div class="col-xs-4"></div>
     <div>   
         
     <form action="viewstatus1.php" method="post">
         
        <label for="Project Id"><b>Project Id</b></label>
        <input type="text" placeholder="Enter Project Id" name="pid" required><br/>
        <br><br><br>
        <div class="col-xs-4"></div>
        <button class="btn btn-primary btn-sx" type="submit">View Status</button>
        
            </div>
        </form>
  </div>
    </body>
</html>   
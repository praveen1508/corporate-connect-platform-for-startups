<?php
session_start();
include('db.php');
$pide=$_POST['pid'];
$_SESSION['kg']=$pide;
$q="select Inf from project where Project_id=$pide";
$q1="select Company from project where Project_id=$pide";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
$row = mysqli_fetch_array($r);
$r1=mysqli_query($con,$q1) or die(mysqli_error($con));
$row1 = mysqli_fetch_array($r1);
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
      <a class="navbar-brand" href="#" style="color:white"><i>CORP CONNECT<i></a> </a>
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
    <form action="./project propose.html">
    <div class="container">
    <div class="card">   
    <div class="card-header"><h1><?php echo("$row1[0]")?><h1></div>
    <div> <h3> Project Details : </h3><br><br></div>
    <div class="card-body"><?php echo("$row[0]")?></div>
    <div><br><br></div>
   <div class="card-footer"><button class="btn btn-primary btn-sx" input type="submit">Apply</button></div>
</form>
</div>
</div> 
  </div>
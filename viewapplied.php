<?php include('db.php');
session_start();
$pid1=$_POST['pid'];
$_SESSION['kg1']=$pid1;
$q="select Company,Cost,Abstract from projectidea where Project_id='$pid1'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
?>
<html>
    <head>
  <title>View Applied</title>
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
      <a class="navbar-brand" href="#" style="color:white"><i>Corp Connect<i></a>A> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="viewproject1.php" style="color:white">View Projects</a></li>
        <li><a href="viewapprove.php"style="color:white">View Approvals</a></li>
        <li><a href="Post_project.html"style="color:white">Post Project</a></li>
        <li><a href="discuss1.php"style="color:white">Discuss</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" style="color:white"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
       </ul>
      </div>
  </div>
</nav>
        </div>
        <br/><br/><br/><br/><br/><br/>
        <div>
     <table class="table table-condensed">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Cost</th>
        <th>Abstract</th>
        <th>Approve</th>
      </tr>
    </thead>
    <tbody>
      <?php
    while ($row = mysqli_fetch_array($r)) :
        ?>
        <tr>
            <td><?php echo $row[0]; ?></td> 
            <td><?php echo $row[1]; ?></td>
            <td><a href="download.php?file=<?php echo $row[2] ?>">Download</a></td>
            <td><a href="approve.php?appcompany=<?php echo $row[0] ?>">Approve</a></td>
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
         

  </div>
    </body>
</html>
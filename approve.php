<?php
include('db.php');
session_start();
$kg1=$_SESSION['kg1'];
$appcompany=$_GET['appcompany'];
$q="UPDATE project SET Status='A' WHERE Project_id='$kg1'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
$q1="UPDATE project SET SanctionedCompany='$appcompany' WHERE Project_id='$kg1'";
$r1=mysqli_query($con,$q1) or die(mysqli_error($con));
header('location:success2.html');
?>
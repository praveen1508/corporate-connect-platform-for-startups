<?php
include('db.php');
session_start();
$c=$_SESSION['uname'];
$c1=$_POST['pname'];
$c2=$_POST['pdetails'];
$q="INSERT INTO project VALUES(0,'$c1','$c','P','$c2','')";
if (mysqli_query($con, $q)) {
    header('location: success.html');
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}
?>
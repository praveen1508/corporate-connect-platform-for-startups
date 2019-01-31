<?php
include('db.php');
session_start();
$c=$_POST['ciname'];
$c1=$_POST['cname'];
$c2=$_POST['uname'];
$c3=$_POST['pname'];
$c5=$_POST['coname'];
$c4=$_POST['pdetails'];
$c6=$_POST['ctype'];
$q="INSERT INTO company VALUES('$c','$c1','$c2','$c3','$c4','$c5','$c6')";
if (mysqli_query($con, $q)) {
    header('location: regsuccess.html');
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}
?>
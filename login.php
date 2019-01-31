<?php
include('db.php');
session_start();
$u=$_POST['username'];
$p=$_POST['pass'];
$q="select Password,Type,CompanyName from company where Email='$u'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
$row=mysqli_fetch_row($r);
$_SESSION['uname']=$row[2];
if($row[0]==$p)
{
   if($row[1]=='N') 
   {
    header('location: viewproject1.php');

   }
   else if($row[1]=='S')
   {
     header('location: viewproject.php');
   }
}
else
{
    echo('Login Failed');

}

<?php
session_start();
include('db.php');
$kg=$_SESSION['kg'];
$tocname=$_SESSION['uname'];
$cost=$_POST['cost'];
if ( isset( $_FILES['pdfFile'] ) ) {
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "upload/".$_FILES['pdfFile']['name'];

		if (file_exists($dest_file)) {
			print "The file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			if($_FILES['pdfFile']['error'] == 0) {
				print "Pdf file uploaded successfully!";
				print "<b><u>Details : </u></b><br/>";
                print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
	 $q="INSERT INTO projectidea VALUES('$kg','$tocname','$cost','$dest_file')";
	 header('location: success1.html');

	 
if (mysqli_query($con, $q)) {
    header("success1.html");
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}
?>
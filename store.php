<?php 

$id=$_GET['id'];
$name=$_POST['name'];
$father=$_POST['father_name'];
$mother=$_POST['mother_name'];
$address=$_POST['address'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$class=$_POST['class'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$created=$_POST['created'];

$conn= new mysqli('localhost','root','','sms');
$sql= "INSERT INTO students
VALUES(NULL,'$name','$father','$mother','$address','$roll','$reg','$class','$age','$dob',NULL)"; 
	
if ( $conn->query($sql)) {
	header("location:index.php");
}else{
	echo "Not Inserted";
}








 ?>
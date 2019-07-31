<?php

 $Name = "";
 $Email ="";
 $Password ="";
 $Address = false;
 $Gender="";
 $Hobby="";

 $id=0;

 
// connect to database
 $db = mysqli_connect('localhost','root','','Register');

//check db connection
// if ($db->connect_error) {
 //	die("connection failed:".$db);
// }
 //else{
 //	echo "connection";
 //}


 //if save button is clicked
 if (isset($_POST['submit'])) {
 	$Name = $_POST['name'];
 	$Email =$_POST['email'];
 	$Password =$_POST['password'];
 	$Address =$_POST['address'];
 	$Gender =$_POST['gender'];
 	$Hobby =$_POST['hobby'];
 
    $id = $_POST['id'];

$query="INSERT INTO login (Name,Email,Password,Address,Gender,Hobby) VALUES ('$Name','$Email','$Password','$Address','$Gender','$Hobby')";
 	mysqli_query($db,$query);
 	header("location:index.php");
 }

  $results = mysqli_query($db,"SELECT * FROM login");
 ?>
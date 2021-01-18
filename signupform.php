<?php

session_start();
header('location:index.php');



include 'databasconnect.php';

$id = $_POST[''];
$name = $_POST['name'];
$username = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];




$s = "select * from registration where name ='$name' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)

{
	echo "Registration forThis Usename is Already Submitted";
}

else{

	$reg = "INSERT INTO registration (id,name,username,contact,email,password) VALUES ('$id','$name','$username','$contact','$email','$password')";

	mysqli_query($con,$reg);

	echo "Registration Completed";
}

?>
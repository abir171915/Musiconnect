<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'musiconnect');

$artist= $_POST['artist'];
$email= $_POST['email'];
$pass= $_POST['password'];
$genre= $_POST['genre'];


 $s= " select * from musician where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "email already taken";
}else{
	$reg= "insert into musician(Name,Email,password,Genre) values ('$artist' ,'$email', '$pass','$genre')";
	mysqli_query($con , $reg);
	$_SESSION['email']=$email;
	$_SESSION['Name']=$artist;
	header('location:mhome.php');
	
}

?>
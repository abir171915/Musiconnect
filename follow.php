<?php

    include('db.php');
    
    session_start();

   
    $sender_name=$_SESSION['name'];
    $sender_id=$_SESSION['id'];
    $receiver_name=$_GET['name'];
    $receiver_id=$_GET['id'];


    $reg= "insert into follow(sender_id,sender_name,receiver_id,receiver_name) values ('$sender_id' ,'$sender_name', '$receiver_id','$receiver_name')";
	mysqli_query($con , $reg);

?>
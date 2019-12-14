<?php

include 'connect.php';


$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];


$place="INSERT INTO registration(`name`,`email`,`contact`,`password`)values('$name','$email','$contact','$password')";


$insert=mysqli_query($connect,$place);



if ($insert) {
	header('location:login.php');
}else{
	echo "code check chesko ra ****";
}








?>
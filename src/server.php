<?php

session_start(); 

$username="";
$email="";
$errors = [];

$db = mysqli_connect('localhost','root','','registration');

if(isset($_POST['register'])){
	
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password1 = mysqli_real_escape_string($db,$_POST['password1']);
	$password2 = mysqli_real_escape_string($db,$_POST['password2']);


	if(empty($username)){
		$errors["username"] = "Username is required";
	}

	if(empty($email)){
		array_push($errors,"Email is Required");
	}

	if(empty($password1)){
		array_push($errors,"Password is Required");
	}

	if($password1!=$password2){
		array_push($error,"Passwords do not match");
	}

	if(count($errors)==0){
		$password= md5($password1);
		$sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
	
		mysqli_query($db,$sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are logged IN";
		header('location: C:\Users\Admin\Documents\Work\Excalibur\files\home.php');

	}

}



?>
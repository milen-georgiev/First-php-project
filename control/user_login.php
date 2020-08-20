<?php
session_start();
include_once('../classes/User.php');
$user = new User();

if(isset($_POST['login'])) {
	$username = $user->escape_string($_POST['username']);
	$user_password = $user->escape_string($_POST['user_password']);
	
	$auth = $user->check_login($username, $user_password);
 
	if(!$auth) {
		header('location:../login.php');
	}
	else {
		$_SESSION['user'] = $auth;
		header('location:../account.php');
	}
} 
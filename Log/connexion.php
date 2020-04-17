<?php

session_start();

require_once 'config.php';

$username = isset($_POST['username'])  ?  trim($_POST['username']) : null ;
$password = isset($_POST['password'])  ?  trim($_POST['password']) : null ;

if( $username != null
	&& $password != null ) {

	$bool = false;
	foreach ($allUsers as $user){
	    if($user = $username) $bool = true;
	}

	if ( $bool && password_verify($password, $realPassword) ) {
		$_SESSION['id'] = 86688;
		header('Location: ../Front/');
		exit;
	}
}

header('Location: index.php');
exit;
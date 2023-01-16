<?php  
	session_start();

	// hapus session
	$_SESSION = [];
	session_unset();
	session_destroy();

	// hapus cookie
	setcookie('ID', '', time()-3600);
	setcookie('Key', '', time()-3600);

	header('Location: login.php');
	exit;
	
?>
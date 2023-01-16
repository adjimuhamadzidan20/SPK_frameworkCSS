<?php  
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "spkframeworkcss"; 

	$koneksi = mysqli_connect($hostname, $username, $password, $database);

	if (mysqli_connect_errno()) {
		trigger_error("Koneksi database gagal! ". mysqli_connect_error(), E_USER_ERROR);
	}

?>
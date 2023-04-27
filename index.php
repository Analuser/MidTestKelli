<?php
	$host = '172.18.0.2';
	$user = 'root';
	$pass = 'root';
	$db = 'Redlock';


	$con = mysqli_connect($host, $user, $pass, $db);
	if(!$con){
		echo "connection fail";
		die();
	}

	$query = mysqli_query($con, "SELECT * FROM users");

	while ($row = mysqli_fetch_array($query)) {
		echo "ID: " . $row['ID'] . " Nama: " . $row['Nama'] . " Alamat: " . $row['Alamat'] . " Jabatan: " . $row['Jabatan'] . "\n";
	}

?>

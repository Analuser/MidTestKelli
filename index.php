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

	$userDatabaseTotal = 0;

	while ($row = mysqli_fetch_array($query)) {
		$userDatabaseTotal+=1;
	}


	echo $userDatabaseTotal;

?>

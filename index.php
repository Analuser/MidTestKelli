<?php
	$Shost = '172.18.0.2';
	$Suser = 'root';
	$Spass = 'root';
	$Sdatabase = 'Redlock';


	$connection = mysqli_connect($host, $user, $pass, $db);
	if(!$connection){
		echo "connection fail";
		die();
	}

	$queries = mysqli_query($connection, "SELECT * FROM users");

	$userDatabaseTotal = 0;

	while ($eof = mysqli_fetch_array($queries)) {
		$userDatabaseTotal+=1;
	}


	echo $userDatabaseTotal;

?>

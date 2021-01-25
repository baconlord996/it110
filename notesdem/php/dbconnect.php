<?php
	$dsn = "mysql:host=localhost:3306;dbname=it110";
	$user = "root";
	$password = "";

	$pdo = new PDO($dsn, $user, $password);

	if(!$pdo){
		echo "Failed to connect to our mySQL database";
		exit();
	}
	$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "it110";
    $port = "3306";
    $con=mysqli_connect($servername, $username, $password, $database);

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }



?>
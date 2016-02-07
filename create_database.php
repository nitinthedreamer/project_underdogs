<?php
	$servername ="localhost";
	$username="root";
	//$password="password";
	$dbname="new_db";
	$conn=new mysqli($servername,$username);//$password);
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}	
	else{
		echo "Eshtablished connection to the database<br/>";
	}

	$sql="CREATE DATABASE ".$dbname;
	if($conn->query($sql)==TRUE){
		echo "database created successfully";
	}
	else echo "Error while creating the database".$conn->error;

	$sql= "CREATE TABLE users(
		email_id VARCHAR(100) NOT NULL,
		name VARCHAR(40) NOT NULL,
		password VARCHAR(30) NOT NULL
		)";
	$password="";
	$conn=new mysqli($servername,$username,$password, $dbname);
	if($conn->query($sql)==true){
		echo "Created a new table in the database";
	}
	else echo "Some error occured while creating the database".$conn->error;
	$conn->close();
?>

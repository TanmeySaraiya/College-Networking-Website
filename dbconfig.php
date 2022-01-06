<?php 
	//error_reporting(0);
	$host="localhost";
	$user="root";
	$pass="";
	//$mysqli = new mysqli("localhost", "username", "password", "dbname");
	$conn= new mysqli($host,$user,$pass,"chatnew");
			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		
 ?>
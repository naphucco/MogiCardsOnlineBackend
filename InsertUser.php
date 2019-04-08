<?php
//Variables for the connection
	$servername = "phpmyadmin";
	$server_username = "admin";
	$server_password = "ef99a9911c5a333595621caa9fc7668e23afaf9c9f191603";
	$dbname = "Mogi_card";
	
//Variable from the user	
	$username = $_POST["usernamePost"]; //"Lucas Test AC";
	$email = $_POST["emailPost"];//"test email";
	$password = $_POST["passwordPost"];//"123456";
	
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO Mogi_card.Users (username, email, password)
			VALUES ('".$username."','".$email."','".$password."')";
	$result = mysqli_query($conn ,$sql);
	
	if(!result) echo "there was an error";
	else echo "Everything ok.";

?>
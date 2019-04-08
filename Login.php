<?php 
	$servername = "phpmyadmin";
	$server_username = "admin";
	$server_password = "ef99a9911c5a333595621caa9fc7668e23afaf9c9f191603";
	$dbname = "Mogi_card";
		
	$user_username = $_POST["usernamePost"];
	$user_password = $_POST["passwordPost"];
		
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$conn){
		die("Connection failed. ". mysql_connect_error());
	}	
	
	$sql = "SELECT Password FROM Mogi_card.Users WHERE Username = '".$user_username."' ";
	
	if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){			
				if($row['Password'] == $user_password){
					echo "login success";
				} else{
					echo "password incorect";
				}
			}
		} else{
			echo "User no found";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}	
?>
<?php 
	$servername = "phpmyadmin";
	$server_username = "admin";
	$server_password = "ef99a9911c5a333595621caa9fc7668e23afaf9c9f191603";
	$dbname = "Mogi_card";
		
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$conn){
		echo ("Connection failed. ");
		die("Connection failed. ". mysql_connect_error());
	}	
	
	$sql = "SELECT ID, Name, Type, Cost FROM Mogi_card.Items";
	
	if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){			
				echo "ID:".$row['ID'] . "|Name:".$row['Name']. "|Type:".$row['Type']. "|Cost:".$row['Cost'] . ";";
			}
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}	
?>
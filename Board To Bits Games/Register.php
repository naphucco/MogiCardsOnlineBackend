<?php
	
	$servername = "phpmyadmin";
	$server_username = "admin";
	$server_password = "ef99a9911c5a333595621caa9fc7668e23afaf9c9f191603";
	$dbname = "Mogi_card";

	$con = mysql_connect($servername,$server_username,$server_password,$dbname)

	if(mysqli_connect_erro())
	{
		echo "1 : Connection failed";
		exit();// error code #1 = conneciont failed
	}

	$username = $_POST["name"];
	$password = $_POST["password"];

	//check of name exists
	$namecheckquery = "SELECT Username FROM Mogi_card.Players WHERE Username = '" . $username . "';";

	$namecheck = mysqli_query($con, $namecheckquery) or die("2"); //error code #2 - name check query failed

	if(mysqli_num_rows($namecheck) > 0)
	{
		echo "3: Name already exists"
		exit();
	}

	//add user to the table
	$salt = "\$5\$rounds=5000\$" . "steam"

?>
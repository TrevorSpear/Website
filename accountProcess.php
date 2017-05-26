<title>Abon</title>
<link rel="stylesheet" type="text/css" href="main.css">
<?php

	include 'extra.php';
	
	require_once('config.php');
	$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
	mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
		or die('Could not connect at all');


	if(!$connection){
		//HeaderToEverything(0,NULL);
		$output = "<p>Unable to connect to database</p>" . $error ;
		echo $output;
		die();
	}

		$user = $_POST['UserName'];
		$UserEmail = $_POST['Email'];
		$UserFirstName = $_POST['FirstName'];
		$UserLastName =  $_POST['LastName'];
		$PrivatePolicy = $_POST['Policy'];
		$Password = $_POST['Password'];
	
	//HeaderToEverything(0,$user);

	echo "<h1 class='sign';>My Account</h1>";
	echo "<div class='leftNow';>";
	if($UserEmail != NULL){
		echo "Email: " . $UserEmail . "<br>";
	}

	if($UserFirstName != NULL){
		echo "First Name: " . $UserFirstName . "<br>";
	}

	if($UserLastName != NULL){
		echo "Last Name: " . $UserLastName . "<br>";
	}
	
	if($user != NULL){
		echo "Username: " . $user . "<br>";
	}

	if($PrivatePolicy != NULL){
		echo "Agreed to private policy: " . $PrivatePolicy ;
	}

	echo "</div>";

	$NewUser = "INSERT INTO Users (username, password, firstName, lastName, email) VALUES('$user','$Password','$UserFirstName','$UserLastName','$UserEmail')";


	$NewPlayer = "INSERT INTO Scores (username, game, score, wins, loses) VALUES('$user','rps','100','0','0')";


	$query = "SELECT * FROM Student where sID='$user' ";
	$result = mysqli_query($connection, $query);
	if (mysqli_num_rows($result)==0) {
		if (mysqli_query($connection, $NewUser)) {
			echo "Record updated successfully <p>";
			mysqli_query($connection, $NewPlayer);
		} else {
			//echo "Error updating record.<br>";
			echo "Student by that username already.<br>";
		}
	}

	mysqli_close($connection);

?>

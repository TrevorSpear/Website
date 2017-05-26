<title>Assignment 5</title>
<link rel="stylesheet" type="text/css" href="main.css">
<?php

	include 'extra.php';
	
	require_once('config.php');
	$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
	mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
		or die('Could not connect at all');
	$user_is_correct = 0;

	if(!$connection){
		//HeaderToEverything(0,NULL);
		$output = "<p>Unable to connect to database</p>" . $error ;
		echo $output;
		die();
	}

	$sql = "SELECT username, password, firstName, lastName, email FROM Users";
	$result = $connection->query($sql);


	//My Assignment 5 isn't graded so I can't do the password thing 
	//See the pictures I had changed it and then changed it back
	//$password = md5($_POST['Password']);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if($row["username"] == $_POST['UserName']&&$row["password"] == $_POST['Password']){
				$user = $row["username"];
				$UserEmail = $row["email"];
				$UserFirstName = $row["firstName"];
				$UserLastName =  $row["lastName"];
				$user_is_correct = 1;
			}
		}
	} else {
		echo "<br>0 results<br>";
	}

	if($user_is_correct == 1){

	echo $user;
	HeaderToEverything(0,$user);

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

	}else{
		echo "This user does not exist.";
	}

	echo "</div>";

	mysqli_close($connection);

?>

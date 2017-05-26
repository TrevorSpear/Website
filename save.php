<?php
	if($_GET['UserName'] == NULL||$_GET['UserName'] ==""){
		echo "Please login or sign up to get your scores saved.";
	}else{
		require_once('config.php');
		$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
		// Check connection
		if(!$connection) {
			die("Connection failed");
		} 
		
		$GetUserName = $_GET['UserName'];
		
		$query = "SELECT * FROM Scores where username='$GetUserName'";
		$results = mysqli_query($connection, $query);

		$score = $_GET['Money'];
		$win = $_GET['Win'];
		$loss = $_GET['Loses'];
	
		
		if (mysqli_num_rows($results)==0) {
			echo "Could not update";
		} else {			

			$sqls = "UPDATE Scores SET score='$score' WHERE username='$GetUserName' ";
			if (mysqli_query($connection, $sqls)) {

			} else {
				echo "Error updating Score." . mysqli_error($dbc);
			}

			$sqls = "UPDATE Scores SET wins='$win' WHERE username='$GetUserName' ";
			if (mysqli_query($connection, $sqls)) {

			} else {
				echo "Error updating Wins." . mysqli_error($dbc);
			}

			$sqls = "UPDATE Scores SET loses='$loss' WHERE username='$GetUserName' ";
			if (mysqli_query($connection, $sqls)) {

			} else {
				echo "Error updating Loses." . mysqli_error($dbc);
			}
			echo "complete";
		}
	}
?>

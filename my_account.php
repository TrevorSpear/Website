<title>Abon</title>
<link rel="stylesheet" type="text/css" href="main.css">

<?php

	include "extra.php";
	HeaderToEverything(6,$_GET['UserName']);
?>

<div style='border:0px;padding-Left:4em;padding-Right:4em;'>

<?php
	echo "<form action='my_account.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";

	if($_GET['UserName'] == NULL||$_GET['UserName'] ==""){
		echo "Please login or sign up.";
		echo "<br><br><br>";
		echo "<br><br><br>";
		echo "<br><br><br>";
		echo "<br><br><br>";
		echo "<br><br><br>";
	}else{
		echo "<h1 class='sign';>My Account</h1>";
		echo "<div class='leftNow';>";
		
		require_once('config.php');
		$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
		// Check connection
		if(!$connection) {
			die("Connection failed");
		} 
		
		$GetUserName = $_GET['UserName'];

		$sql = "SELECT username, firstName, lastName, email FROM Users";
		$result = $connection->query($sql);

		if ($result->num_rows > 0) {
    			// output data of each row
    			while($row = $result->fetch_assoc()) {
				if($row["username"] == $_GET['UserName']){
        				echo "Username: " . $row["username"];
					echo "<br>Name: " . $row["firstName"] ;
					echo " " . $row["lastName"];
					echo "<br>Email: " . $row["email"] ;
					echo "<br>";
				}
    			}
		} else {
    			echo "0 results";
		}

		$ss = "SELECT username, score, wins, loses, game FROM Scores";
		$results = $connection->query($ss);

		if ($results->num_rows > 0) {
    			// output data of each row
    			while($rows = $results->fetch_assoc()) {
				if($rows["username"] == $GetUserName){
					echo "<hr>";
					echo "Game: " . $rows["game"];
        				echo "<br>Score: " . $rows["score"];
					echo "<br>Wins: " . $rows["wins"] ;
					echo "<br>Loses: " . $rows["loses"] ;
				}
    			}
		} else {
    			echo "0 results";
		}



		echo "</div>";
	}
?>
</div>
<?php
			echo "<br><br><br>";
			echo "<br><br><br>";
			echo "<br><br><br>";

FooterToEverything();
?>

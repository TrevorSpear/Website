<title>Abon</title>
<link rel="stylesheet" type="text/css" href="main.css">

<?php

	include "extra.php";
	HeaderToEverything(5,$_GET['UserName']);

	echo "<form action='high_score.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";
	echo "<div style='border:0px;padding-Left:4em;padding-Right:4em;'>";
	
	echo "<h2 class='sign';><u>High Score</u></h2>";
	echo "<h3 class='sign';>Rock Paper Scissor</h3>";
	echo "<div class='leftNow';>";
		
	require_once('config.php');
	$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
	// Check connection
	if(!$connection) {
		die("Connection failed");
	} 
		
	$GetUserName = $_GET['UserName'];

	$sql = "SELECT * FROM Scores ORDER BY score DESC";
	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		$i = 1;
		$k = $i;

		echo "<b>Username</b>";
		echo "<span style='float: right;'><b>Score</b></span><hr>";
		
		while($row = $result->fetch_assoc()) {
			if($i == 6){
				break;
			}else if($k != $i){
				echo "<hr>";
			}
			
			if($row["game"] == rps&&$row["username"] != ""){
       				echo $i . ". " . $row["username"];
				echo "<span style='float: right;'>" . $row["score"] . "</span>";
				$i = $i + 1;
			}
		
		}

	} else {
		echo "<br>0 results<br>";
	}
	echo "<br>";

	echo "</div>";

	echo "<br><br><br>";	
	echo "<br><br><br>";	
	echo "<br><br><br>";	
	echo "<br><br><br>";	

	echo "</div>";


	mysqli_free_result($result);
	mysqli_close($connection);



FooterToEverything();
?>

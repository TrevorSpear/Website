<head>
	<title>Abon</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="main.js"></script>
</head>
<body onload="CurrentMoney()">

<script>
function loadDoc() {
  var newvaribles= "UserName="+ NameofUser + "&Money=" + PlayerMoney + "&Win="+Win+"&Loses="+ Loses;
  var xhttp = new XMLHttpRequest();
  var RunUrl = "save_info2.php?" + newvaribles;
  xhttp.open("GET", RunUrl, true);

 xhttp.onreadystatechange = function() {

    if (xhttp.readyState == 4 && xhttp.status == 200) {
      	document.getElementById("updated_score").innerHTML = xhttp.responseText;
    }
  };
  xhttp.send(newvaribles);
 
}
</script>


<?php include "extra.php"; ?>

<?php HeaderToEverything(1,$_GET['UserName']); ?>


<?php
	$UN = 100;

if($_GET['UserName'] != NULL&& $_GET['UserName'] != "") {
	require_once('config.php');
	$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	$sql = "SELECT username, score, game FROM Scores";
	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if($row["username"] == $_GET['UserName']&& $row['game'] == rps){
				$UN = $row["score"];
			}
		}
	}
}else{
	$UN = 100;
}
	echo "<form action='home.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";
?>

<div style='border:0px;padding-Left:4em;padding-Right:4em;'>

<?php
	echo "Round Start: $<span Id='GetData' value='$UN'>" . $UN . "</span>";
?>

<script>
var PlayerMoney = 100;
var Bet = 10;
var PlayerChoice;
var Win = 0;
var Loses = 0;
var Tie = 0;
var Data = 0;
var NameofUser;

function CurrentMoney(){
	if(Data == 1){
		document.getElementById("Money").innerHTML = PlayerMoney;
		document.getElementById("Mon").value = PlayerMoney;
	}

	document.getElementById("Betting").value = Bet;

	States();
}
function States(){
	document.getElementById("Tie").innerHTML = Tie;
	document.getElementById("Win").innerHTML = Win;
	document.getElementById("Loses").innerHTML = Loses;
	document.getElementById("Winner").value = Win;
	document.getElementById("Losers").value = Loses;


}

function Game(PlayerChoice){
	Bet = document.getElementById("Betting").value;

	if(Number(Bet) <= PlayerMoney && Number(Bet) > 0){
		var Computer = Math.floor((Math.random() * 3) + 1);
		var ComputerChoice;
		var c;

		if(Computer == 1){
			ComputerChoice = "Rock";

		}else if(Computer == 2){
			ComputerChoice = "Paper";

		}else{
			ComputerChoice = "Scissor";
		}
		
		if(PlayerChoice == ComputerChoice){
			alert("Tie");
			Tie += 1;
		
		}else if(PlayerChoice == "Rock" && ComputerChoice == "Scissor"){
			alert("You win");
			c = PlayerMoney + Number(Bet);
			PlayerMoney = c;
			Win += 1;
			document.getElementById("Outcome").innerHTML =  "Player Win";

		}else if(PlayerChoice == "Paper" && ComputerChoice == "Rock"){
			alert("You win");
			PlayerMoney = PlayerMoney + Number(Bet);
			Win += 1;
			document.getElementById("Outcome").innerHTML =  "Player Win";

		}else if(PlayerChoice == "Scissor" && ComputerChoice == "Paper"){
			alert("You win");
			PlayerMoney += Number(Bet);
			Win += 1;
			document.getElementById("Outcome").innerHTML =  "Player Win";

		}else{
			alert("You lose");
			PlayerMoney = PlayerMoney - Number(Bet);
			Loses += 1;
			document.getElementById("Outcome").innerHTML =  "Computer Win";
		}

		CurrentMoney();

		document.getElementById("Answer").innerHTML =  PlayerChoice + " vs " + ComputerChoice;
	}else{
		alert("Bets need to be more than 0 and less than the Player's money");
	}
	
}
</script>


<h1>Rock, Paper, Scissor</h1>

<div>

<br>


<p>Money $<span id="Money"></span></p>
<p>Bet   $<input type="text" id="Betting" value=""></p> 

<br>

<table>
	<tr>

	<td>
		<div>
		<img src=rock.png alt=Rock onclick=Game("Rock")>
		</div>
		Rock
	</td>

	<td>
		<div>
		<img src=paper.png alt=Paper onclick=Game("Paper")>
		</div>
		Paper
	</td>

	<td>
		<div>
		<img src=scissor.png alt=Scissor onclick=Game("Scissor")>
		</div>
		Scissor
	</td>

	</tr>
</table>

<br>

<p id="demo"></p>

<br>

<h2>AJAX</h2>
<button type="button" onclick="loadDoc()">Update Score</button>
</div>



<?php
echo 	"<form method='POST' id='myForm' action='loadDoc()'>
	<input style='display:none;' type='text' name='Money' id='Mon' value=''> 
	<input style='display:none;' type='text' name='Win' id='Winner' value=''> 
	<input style='display:none;' type='text' name='Loses' id='Losers' value=''> 
	<input style='display:none;' type='text' name='UserName' id='NU' value='" . $_GET['UserName'] . "'>
	</form>";
?>

<?php
	echo "<span Id='updated_score'></span>";
  //xhttp.open("GET", "save_info2.php?UserName='" + NameofUser + "'&Money='" + PlayerMoney + "'&Win='" + Win +"'&Loses='" + Loses + "'", true);
?>

<div>
Player: <span Id="Win"></span> <br>
Tie: <span Id="Tie"></span> <br>
Computer: <span Id="Loses"></span>

<br>
<br>
Outcome: <p id="Outcome"></p>
<br>

Player vs Computer
<p id="Answer"></p>
</div>



<script>
	if(Data == 0){
		PlayerMoney = Number(document.getElementById("GetData").innerHTML);
		Data = 1;
		document.getElementById("Money").innerHTML = PlayerMoney;
		document.getElementById("Money").value = PlayerMoney;
		NameofUser = document.getElementById("NU").value;
	}
</script>


<br>
<h3>Rules:</h3>
<hr>

<table>
	<tr>
		<td><b>Object</b></td>
		<td><b>Beats</b></td>
		<td><b>Loses</b></td>
		<td><b>Tie</b></td>
	</tr>
	<tr>
		<td><b>Rock</b></td>
		<td>Scissor</td>
		<td>Paper</td>
		<td>Rock</td>
	</tr>
	<tr>
		<td><b>Paper</b></td>
		<td>Rock</td>
		<td>Scissor</td>
		<td>Paper</td>
	</tr>
	<tr>
		<td><b>Scissor</b></td>
		<td>Paper</td>
		<td>Rock</td>
		<td>Scissor</td>
	</tr>
</table>


<br>
<br>

<h3>Instructions:</h3>

<hr>

<table>
	<tr>
		<th>Rules</th>
	</tr>
	
	<tr>
		<td>1. Check Bet to see if that's the bet you want.</td>
	</tr>
	<tr>
		<td>2. Click on the image you want to fight with.</td>
	</tr>
	<tr>
		<td>3. Have Fun :)</td>
	</tr>
</table>

<br><br><br>

</div>

<footer>
By Trevor Spear
</footer>

<br>
</body>

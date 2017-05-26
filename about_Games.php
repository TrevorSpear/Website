<head>
	<title>Abon</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="main.js"></script>
</head>

<?php include "extra.php"; ?>
<?php HeaderToEverything(2,$_GET['UserName']); ?>
<?php
	//Need to make this AJAX (Looks better)
	echo "<form action='about.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";
?>

<div style="border:0px;padding-Left:4em;padding-Right:4em;">

<br>



<br><br>
<h2>Game:</h2>
<hr>
<h3>Rules:</h3>
<hr>

<table>
	<tr>
		<th>Object</th>
		<th>Beats</th>
		<th>Loses</th>
		<th>Tie</th>
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

<h3>Instructions:</h3><hr>


<table>
	<tr>
		<th>Steps</th>
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

<br><br>
</div>
<?php FooterToEverything(); ?>

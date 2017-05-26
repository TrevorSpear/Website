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
<h2>Details about the Website:</h2>
<hr>
<h4><u>Languages:</u></h4>
In this website I use multipule computer languages to make this website like:
<ol>
<li>php to get your score from the server and update your profile as well as add it to the database.</li><br>
<li>Javascript to play the game.</li><br>
<li>Ajax so I don't have to go to a different page to access the server.</li>
</ol>

<br>
<h4><u>Little facts:</u></h4>

I pass stuff through GET.<br>



<hr><br>
<h2>Game Information:</h2>
<h3><u>Rules:</u></h3>
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

<hr>
<br>

<h3><u>Instructions:</u></h3><hr>


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

<hr><br>
<h2>Trevor Michael Spear</h2>
<a name="About"></a>
<h3><u>About:</u></h3>

<hr>

<b>Current:</b>
<div style="border:0px;padding-Left:8em;">
I'm an engineering student in my sophmore year. 
I'm going to be applying to Pro-School for Computer Science very shortly. </div>

<br>
<b>Awards:</b>
<div style="border:0px;padding-Left:8em;">
Science Olyplia 1st place.</div><br>

<b>Past:</b>
<div style="border:0px;padding-Left:8em;">
Guide Dogs for the blind puppy trainer for the last 8 years.</div><br>

<b>Future:</b>
<div style="border:0px;padding-Left:8em;">
Get a minor in Business as well as a focus in security. <br>
Enter pro-school in the winter.

</div><br>

<hr>
<br>

</div>

<?php FooterToEverything(); ?>
<br>

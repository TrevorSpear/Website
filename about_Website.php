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
<h3>Details about the Website:</h3>
<hr>
<h4><u>Languages:</u></h4>
In this website I use multipule computer languages to make this website like:
<ol>
<li>Javascript to play the game.</li><br>
<li>Ajax so I don't have to go to a different page to access the server.</li>
<li>php to get your score from the server and update your profile as well as add it to the database.</li><br>
</ol>

<br>
<h4><u>Little facts:</u></h4>
I pass stuff through GET.<br>

<br><br><br>
<br><br><br>

</div>

<?php FooterToEverything(); ?>

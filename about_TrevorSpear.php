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

<div style='border:0px;padding-Left:4em;padding-Right:4em;'>

<h1>Author: Trevor Michael Spear</h1>
<hr>
<h3>About:</h3>

<hr>
<br>

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

<br>
<br>

</div>

<?php FooterToEverything(); ?>

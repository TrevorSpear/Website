<title>Abon</title>

<link rel="stylesheet" type="text/css" href="main.css">

<?php include "extra.php"; ?>
<?php HeaderToEverything(4,$_GET['UserName']); ?>
<?php
	echo "<form action='login.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";
?>
<script>
var ch1;
var ch2;
	function chkPasswords (){
		ch1 = document.getElementById("UserName");
		ch2 = document.getElementById("PassWord");

		var pos1 = /^[a-zA-Z0-9]\w{0,}$/;

		if(pos1.test(ch1.value) == false){
			alert("The name you entered (" + ch1.value +
            		") is not in the correct form. \n" +
            		"Password is 6 characters. \n" + 
			"At least one capitalized letter, one number, one lowercase number. \n" + 
            		"Please go back and fix your username"
			);
			return false;
		}

		var pos2 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

		if(pos2.test(ch2.value) == false){
			alert(
			"You must at LEAST have one number. \n" +
			"You must at LEAST have one Capitalized letter. \n" +
			"And at least 6 characters."
			);
			return false;
		}
		loadDoc();
	}

	window.onload = function(){
		document.getElementById("myForm").onsubmit = chkPasswords;
	}	
</script>

<script>
function loadDoc() {
  var newvaribles= "UserName="+ ch1 + "&Password=" + ch2;
  var xhttp = new XMLHttpRequest();
  var RunUrl = "check_login.php?" + newvaribles;
  xhttp.open("GET", RunUrl, true);

 xhttp.onreadystatechange = function() {

    if (xhttp.readyState == 4 && xhttp.status == 200) {
      	document.getElementById("updated_score").innerHTML = xhttp.responseText;
    }
  };
  xhttp.send(newvaribles);
 
}
</script>

<div style="border:0px;padding-Left:4em;padding-Right:4em;">


<br>
<h1 class="sign">Login</h1>
<hr>

<?php
echo "<form method='POST|GET' id='myForm'>
<table class='page2'>
	<tr class='page'>
		<td class='page'>User Name <input type='text' name='UserName' id='UserName'></td>
	</tr>
	<tr class='page'>
		<td class='page'>Password <input type='password' name='PassWord' id='PassWord'></td>
	</tr>
</table>

	<input type='submit' value='Login' style='width:70px; height:32px; text-align:both;' />";
?>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br>

</div>

<?php FooterToEverything() ?>

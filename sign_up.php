<title>Abon</title>
<link rel="stylesheet" type="text/css" href="main.css">


<?php include "extra.php"; ?>
<?php HeaderToEverything(3,$_GET['UserName']); ?>
<?php
	echo "<form action='sign_up.php'>";
	echo "<input type='submit' value='Log out' style='width:70px; height:32px; text-align:both;' />";
	echo "</form>";
?>

<div style="border:0px;padding-Left:4em;padding-Right:4em;">
<br>

<h1 class="sign">Register Account</h1>

If you already have an account with us, please login at the login page.

<br><hr><br>

<script>
	function chkPasswords (){
		var ch1 = document.getElementById("firstName");
		var ch2 = document.getElementById("lastName");
		var ch3 = document.getElementById("userName");
		var ch4 = document.getElementById("email");
		var ch5 = document.getElementById("PassWord1");
		var ch6 = document.getElementById("PassWord2");
		var ch7 = document.getElementById("PP");
		
		var pos1 = /^[a-zA-Z]\w{0,}$/;

		if(pos1.test(ch1.value) == false){
			alert("The name you entered (" + ch1.value +
            		") is not in the correct form. \n" +
            		"The correct form is: " +
            		"a-z A-Z at least 8 characters. \n" + 
			"Please go back and fix your first name"
			);	
			return false;
		}

		var pos2 = /^[a-zA-Z]\w{0,}$/;
	
		if(pos2.test(ch2.value) == false){
			alert("The name you entered (" + ch2.value +
            		") is not in the correct form. \n" +
            		"The correct form is: " +
            		"a-z A-Z at least 8 characters \n" +
            		"Please go back and fix your last name"
			);
			return false;
		}

		var pos3 = /^[a-zA-Z0-9]\w{0,}$/;

		if(pos3.test(ch3.value) == false){
			alert("The name you entered (" + ch3.value +
            		") is not in the correct form. \n" +
            		"The correct form is: " +
            		"A-Z a-z 0-9 \n" +
            		"Please go back and fix your username"
			);
			return false;
		}

		var pos4 = /^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;

		if(pos4.test(ch4.value) == false){
			alert("The name you entered (" + ch4.value +
            		") is not in the correct form. \n" +
            		"The correct form is: " +
            		"a-z A-z 0-9 @ a-z 0-9 . a-z{2,3} \n" +
            		"Please go back and fix your email"
			);
			return false;
		}
			

		var pos5 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	
		if(pos5.test(ch5.value) == false){
			alert("The name you entered (" + ch5.value +
            		") is not in the correct form. \n" +
            		"The correct form is: " +
            		"At least 1 digit/A-Z then as many a-z \n" +
            		"Please go back and fix your Password");
		}
		
		if(ch5.value != ch6.value){
			alert("Passwords must match");
			return false;
		}
	
		if(ch7.value != on){
			alert("Must agree to the privacy policy");
			return false;
		}
	}

	window.onload = function(){
		document.getElementById("myForm").onsubmit = chkPasswords;
	}	
</script>

<?php


ob_start();

echo "<form method='POST' id='myForm' action='accountProcess.php'>
<table class='page2'>
	<tr class='page'>
		<td class='page'>First Name <br><input type='text' name='FirstName' id='firstName'></td>
		<td class='page'>Last Name <br><input type='text' name='LastName' id='lastName'></td>
	</tr>
	<tr class='page'><td class='page'><br></td></tr>
	<tr class='page'>
		<td class='page'>Username <br><input type='text' name='UserName' id='userName'></td>
		<td class='page'>Email <br><input type='text' name='Email' id='email'></td>
	</tr>
	<tr class='page'><td class='page'><br></td></tr>
	<tr class='page'>
		<td class='page'>Password <br><input type='password' name='Password' id='PassWord1'></td>
		<td class='page'>Re-Password <br><input type='password' name='Password2' id='PassWord2'></td>
	</tr>
	<tr class='page'><td class='page'><br></td></tr>
	<tr class='page'>
		<td class='page'><input type='checkbox' name='Policy' id='PP'> I agree to the <a href='#'>privacy policy</a></td>
	</tr>
</table>

<br>
	<input type='submit' value='Sign up' style='width:70px; height:32px; text-align:both;' />

</form>";
?>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br>

<?php FooterToEverything() ?>

<?php

function HeaderToEverything($a,$username) {
	
	$greetUser = 0;
	ob_start();

	//This is the top nav bar with drop downs

	echo "<ul style='background-color:black;width: 100%;'>";

		echo "<li style='background-color:black;'><a href='home.php'>Home</a></li>";

		echo "<li class='dropdown' style='background-color: black;'>
			<a href='about.php' class='dropbtn'>About</a>
				<div class='dropdown-content'>
					<a href='about_TrevorSpear.php'>Trevor Spear</a>
					<a href='about_Website.php'>Website</a>
					<a href='about_Games.php'>Games</a>
				</div>
			</li>";

		echo "<li class='dropdown' style='background-color: black;'>
			<a href='high_score.php' class='dropbtn'>Score</a>
				<div class='dropdown-content'>
					<a href='high_score.php'>High Scores</a>
					<a href='my_account.php'>Account Score</a>
				</div>
			</li>";

		echo "<li class='dropdown' style='background-color: black;'>
			<a href='rps.php' class='dropbtn'>Games</a>
				<div class='dropdown-content'>
					<a href='rps.php'>RPS</a>
					<a href='rps.php'>High Low</a>
				</div>
			</li>";

		echo "<li style='float:right;'>
			<a href='sign_up.php'>Sign In</a>
		</li>";

		echo "	<li style='float:right;'>
			<a href='login.php'>Login</a>
		</li>";

	echo "</ul>";
		
	echo "<br>" . $username . "<br>";

	if($username != ""&& $username != NULL){
		ob_end_clean();

		echo "<ul style='background-color:black;width: 100%;'>";

			echo "<li style='background-color:black;'><a href='home.php?UserName=" . $username . "'>Home</a></li>";

			echo "<li class='dropdown' style='background-color: black;'>
				<a href='about.php?UserName=" . $username . "' class='dropbtn'>About</a>
					<div class='dropdown-content'>
						<a href='about_TrevorSpear.php?UserName=" . $username . "'>Trevor Spear</a>
						<a href='about_Website.php?UserName=" . $username . "'>Website</a>
						<a href='about_Games.php?UserName=" . $username . "'>Games</a>
					</div>
				</li>";

			echo "<li class='dropdown' style='background-color: black;'>
				<a href='high_score.php?UserName=" . $username . "' class='dropbtn'>Score</a>
					<div class='dropdown-content'>
						<a href='high_score.php?UserName=" . $username . "'>High Scores</a>
						<a href='my_account.php?UserName=" . $username . "'>Account Score</a>
					</div>
				</li>";

			echo "<li class='dropdown' style='background-color: black;'>
				<a href='rps.php?UserName=" . $username . "' class='dropbtn'>Games</a>
					<div class='dropdown-content'>
						<a href='rps.php?UserName=" . $username . "'>RPS</a>
						<a href='rps.php?UserName=" . $username . "'>High Low</a>
					</div>
				</li>";

			echo "<li style='float:right;'>
				<a href='sign_up.php?UserName=" . $username . "'>Sign In</a>
			</li>";
	
			echo "	<li style='float:right;'>
				<a href='login.php?UserName=" . $username . "'>Login</a>
			</li>";

		echo "</ul>";
		
		echo "<br>";
		echo "<div style='border:0px;padding-Left:4em;padding-Right:4em;'>";
		echo "<h1 class='leftNow' style='font-size:18px;padding-Left:4em;padding-Right:4em;'>
			Welcome, " . $username . "</h1><hr>";
		echo "</div>";

		echo "<br>";
	}


	//Panda gif
	echo "<img src='animation.gif' alt='Dat Panda' style='width:100px;height:100px;'>";



	//echo "<li><a href='about.php'>About</a></li>";

	if($username == ""){
		$username = $_GET['UserName'];
		if($username != NULL){
			$greetUser = 1;	
		}
	}


}

function FooterToEverything(){
echo 	"<footer>
		By Trevor Spear
	</footer>";
}
?>

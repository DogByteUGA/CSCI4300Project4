<!DOCTYPE html>
<html>

	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		<script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="bannerarea">
			<img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>

<!-- writes in values from the form into single.txt file.!-->
		<?php
		$valid = true;
		$error = "Error!";
		$file = 'singles.txt';

		$current = file_get_contents($file);
		if($_POST["nameBox"]!=""){
			$current .= $_POST["nameBox"];
		}
		else{
			$valid = false;
		}
		$current .= ",";
		if($_POST["sex"] == "male"){
			$current .="m"; 
		}
		else{
			$current .= "f";
		}
		$current .= ",";
		if($_POST["age"] > 0){
			$current .= $_POST["age"];
		}
		else{
			$valid = false;
		}
		$current .= ",";
		if($_POST["personType"] != ""){
			$current .= strtoupper($_POST["personType"]);
		}
		else{
			$valid = false;
		}
		$current .= ",";
		if($_POST["compType"] != ""){
			$current .= $_POST["compType"];
		}
		$current .= ",";
		if($_POST["min"] > 0){
			$current .= $_POST["min"];
		}
		else{
			$valid = false;
		}
		$current .= ",";
		if($_POST["max"] > $_POST["min"]){
			$current .= $_POST["max"];
		}
		else{
			$valid = false;
		}
		$current .= ",\n";
		if($valid == true){
			file_put_contents($file, $current);
		}
		?>

		<?php if($valid == false){ ?>
		<div>
			<h1>Error!</h1>
			<p>We're sorry. You submitted invalid user information. Please go back and try again.</p>
		</div>
		<?php
		}
		?>

		<?php if($valid == true){ ?>
		<div>
			<h1>Thank you!</h1>
			<p>Welcome to Nerdluv, <?php echo $_POST["nameBox"]; ?>!</p>
			<p>Now <a href="matches.php">log in to see your matches!</a></p>
		</div>
		<?php
		}
		?>

		<div>
			<p>
				This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="index.php">
						<img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>

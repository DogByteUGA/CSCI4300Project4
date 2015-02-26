<!DOCTYPE html>
<html>
	<!-- CSE 154 Homework 4 (NerdLuv) -->
	<!-- shared page top HTML -->
	
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
		
		<!-- your HTML output follows -->
		
		<?php 
		$singles = fopen("singles.txt", "r") or die("Unable to open file!");
		$user = $_GET["nameBox"];


		while(fgets($singles)!= false){
			
			$line = fgests($singles);
			$person = explode(",", $line);
			if ($person[0]==$user) {
				$user = $person;
				break;
			}
			if($user==null){
				die("The user was not found");
			}
		}

		while(fgets($singles)!= false){
			$line = fgests($singles);
			$person = explode(",", $line);
			if ($person[1]!=$user[1]) {
				if($person[2]<$user[6]){
					if($person[2]>$user[5]){
						if($user[2]<$person[6]){
							if($user[2]>$person[5]){
								if($person[4]==$user[4]){
									if(substr($person[3],0,1)==substr($user[3],0,1) || substr($person[3],1,2)==substr($user[3],1,2) || substr($person[3],2,3)==substr($user[3],2,3) || substr($person[3],3,4)==substr($user[3],3,4) ){
										echo "<div class="match">
				<p>
					<img src="https://webster.cs.washington.edu/images/nerdluv/user.jpg" alt="photo" />"
					.$person[0].
				"</p>

				<ul>
					<li><strong>gender:</strong>".  $person[1]."</li>
					<li><strong>age:</strong>     ".$person[2]."</li>
					<li><strong>type:</strong>    ".$person[3]."</li>
					<li><strong>OS:</strong>      ".$person[4]."</li>
				</ul>
			</div>";
									}
								}
							}
						}
					}

				}
			}
		}
		
	 ?>

		<!-- shared page bottom HTML -->
		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
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

<html>
<head>
	<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		<script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" type="text/javascript"></script>
	<title>Signup</title>
</head>
<body>
	<div id="bannerarea">
			<img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
	<form action = "signup-submit.php" method ="post">
		<fieldset>
			<legend> New User Signup:</legend>
		<label>Name:</label>
			<input type="text" name="nameBox" maxlength="16">
		<br>
		<label>Gender:</label>
			<input type="radio" name="sex" value="male" checked>Male
			<input type="radio" name="sex" value="female">Female
		<br>
		<label>Age:</label>
			<input type="text" name="age" maxlength="2" size="6">
		<br>
		<label>Personality Type:</label>
			<input type="text" name="personType" maxlength="4" size="6">
			<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
		<br>
		<label>Favorite OS:</label>
			<select name="compType" onchange="document.getElementById('compType_text').value=this.options[this.selectedIndex].text">
				<option value="Windows">Windows</option>
				<option value="Mac OS X">Mac OS X</option>
				<option value="Linux">Linux</option>
			</select>
			 <input type="hidden" name="compType_text" id="compType_text" value="" />
		<label>Seeking Age:</label>
			<input type ="text" name="min" maxlength="2" size="6"> to <input type="text" name="max" maxlength="2" size="6">
		<br>
		<input type="submit" name="infoSub" value="Sign Up">
		</fieldset>
	</form>
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

<html>
<head>
	<meta charset="utf-8" />
	<?php include 'top.html'; ?>
	<form action = "signup-submit.php" method ="post">
		<fieldset>
			<legend> New User Signup:</legend>
			<strong>
		<label>Name:</label>
		</strong>
			<input type="text" name="nameBox" maxlength="16">
		<br>
		<strong>
		<label>Gender:</label>
		</strong>
			<input type="radio" name="sex" value="male" checked>Male
			<input type="radio" name="sex" value="female">Female
		<br>
		<strong>
		<label>Age:</label>
		</strong>
			<input type="text" name="age" maxlength="2" size="6">
		<br>
		<strong>
		<label>Personality Type:</label>
		</strong>
			<input type="text" name="personType" maxlength="4" size="6">
			<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
		<br>
		<strong>
		<label>Favorite OS:</label>
		</strong>
			<select name="compType" onchange="document.getElementById('compType_text').value=this.options[this.selectedIndex].text">
				<option value="Windows">Windows</option>
				<option value="Mac OS X">Mac OS X</option>
				<option value="Linux">Linux</option>
			</select>
			 <input type="hidden" name="compType_text" id="compType_text" value="" />
			 <br>
			 <strong>
		<label>Seeking Age:</label>
		</strong>
			<input type ="text" name="min" maxlength="2" size="6" placeholder="min"> to <input type="text" name="max" maxlength="2" size="6" placeholder="max">
		<br>
		<input type="submit" name="infoSub" value="Sign Up">
		</fieldset>
	</form>
</body>
<?php include 'bottom.html'; ?>
</html>


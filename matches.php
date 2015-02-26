<html>
<head>
	<meta charset="utf-8" />
<?php 	include 'top.html'; ?>
	<title>Signup</title>
</head>
<body>
	<form action = "matches-submit.php" method ="get">
		<fieldset>
			<legend> Returning User:</legend>
		<label>Name:</label>
			<input type="text" name="nameBox" maxlength="16">
		<br>
		<input type="submit" name="infoSub" value="View My Matches">
		</fieldset>
	</form>
</body>
<?php 	include 'bottom.html'; ?>
</html>

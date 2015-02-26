<!DOCTYPE html>
<html>
<!-- writes in values from the form into single.txt file.!-->
		<?php
		include 'top.html';
		$valid = false;
		$error = "Error!";
		$file = 'singles.txt';

		$current = file_get_contents($file);
		if($_POST["nameBox"]!= ""){
			$current .= $_POST["nameBox"];
			$valid = true;
		}
		else{
			$valid = false;
				echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
				include 'bottom.html';
			exit();
		}
		$current .= ",";
		if($_POST["sex"] == "male"){
			$current .="m"; 
		}
		else{
			$current .= "f";
		}
		$current .= ",";
		if($_POST["age"] > 1){
			$current .= $_POST["age"];
			$valid = true;
		}
		else{
			$valid = false;
			echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
				include 'bottom.html';
			exit();
		}
		$current .= ",";
		if($_POST["personType"]!= ""){
			$current .= strtoupper($_POST["personType"]);
			$valid = true;
		}
		else{
			$valid = false;
			echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
				include 'bottom.html';
			exit();
		}
		$current .= ",";
		if($_POST["compType"]!= ""){
			$current .= $_POST["compType"];
		}
		$current .= ",";
		if($_POST["min"] > 1){
			$current .= $_POST["min"];
			$valid = true;
		}
		else{
			$valid = false;
			echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
				include 'bottom.html';
			exit();
		}
		$current .= ",";
		if($_POST["max"] > $_POST["min"]){
			$current .= $_POST["max"];
			$valid = true;
		}
		else{
			$valid = false;
			echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
				include 'bottom.html';
			exit();
		}
		$current .= ",\n";
		if($valid == true){
			file_put_contents($file, $current);
		}
		?>
		<div>
			<h1>Thank you!</h1>
			<p>Welcome to Nerdluv, <?php echo $_POST["nameBox"]; ?>!</p>
			<p>Now <a href="matches.php">log in to see your matches!</a></p>
		</div>
	</body>
	<?php 	include 'bottom.html'; ?>
</html>

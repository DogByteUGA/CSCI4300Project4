<!DOCTYPE html>
<html>
	<!-- CSE 154 Homework 4 (NerdLuv) -->
	<!-- shared page top HTML -->
		
		<!-- your HTML output follows -->
		<div>
		<?php 
		include 'top.html';
		$singles = fopen("singles.txt", "r") or die("Unable to open file!");
		$user = $_GET["nameBox"];


		while(!feof($singles)){
			
			$line = fgets($singles);
			$person = explode(",", $line);
			if ($person[0]==$user) {
				$user = $person;
				break;
			}
		
		}
			
			if($user==null){
			die("The user was not found");
			}
			$singles = fopen("singles.txt", "r") or die("Unable to open file!");
			echo "<h1>Matches for ".$_GET["nameBox"]."</h1>";
		while(!feof($singles)){
			$line = fgets($singles);
			$person = explode(",", $line);
			if($person[0]==null){
				break;
			}
			if ($person[1]!=$user[1]) {
				if($person[2]<$user[6]){
					if($person[2]>$user[5]){
						if($user[2]<$person[6]){
							if($user[2]>$person[5]){
								if($person[4]==$user[4]){
									if(substr($person[3],0,1)==substr($user[3],0,1) || substr($person[3],1,2)==substr($user[3],1,2) || substr($person[3],2,3)==substr($user[3],2,3) || substr($person[3],3,4)==substr($user[3],3,4) ){
										echo "<div class='match'> <p> <img src='https://webster.cs.washington.edu/images/nerdluv/user.jpg' alt='photo' />" .$person[0]."</p><ul><li><strong>gender:</strong>".  $person[1]."</li><li><strong>age:</strong>     ".$person[2]."</li><li><strong>type:</strong>    ".$person[3]."</li><li><strong>OS:</strong>      ".$person[4]."</li></ul></div>";
									}
								}
							}
						}
					}

				}
			}
		}
		include 'bottom.html';
	 ?>
	 </div>

	</body>
</html>

<?php 
if (isset($_POST["submit"])) {
	$dob_val = $_POST["dob"];
	$dob = new DateTime($dob_val);
	$today = new DateTime('NOW');
	$obj = date_diff($dob, $today);
	$msgres = "<p> Date Of Birth is $dob_val  And Age is : $obj->y .</p>";
	$res = true;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Age Calculator</title>
	</head>
	<body>
		<div>
			<form method="post">
				<p> Select The Date Of Birth : <input type="date" name="dob" required /></p>
				<p> <input type="submit" name="submit" value="Result"> </p>
                
			</form>
		</div>
		<?php
			if ($res) {
				echo "<div>  $msgres </div>";
			}
		?>
	</body>
</html>
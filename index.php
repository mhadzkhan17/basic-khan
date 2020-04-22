<!DOCTYPE html>
<html>
<head>
	<title>BASIC</title>
</head>
<body>
<form method="post">
	<input type="text" name="grade">
	<input type="submit" name="submit" value="Show">
	<?php
	if(isset($_POST['submit'])) {
$grade = $_POST['grade'];

	if($grade < 75)
	{
		echo 'Pabebe ka kasi';
	} else if($grade > 100) {
		echo 'Ang OA ng mahal ko';
	} else {
		
	}
}
?>
</form>

</body>
</html>
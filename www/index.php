<?php
	


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Check Data</title>
</head>
<body>
	<form action="check.php" method="post">
		<lable>Name</lable> <br/>			
		<input type="text" name="name" placeholder="Name"> <br/>	
		<lable>Surname</lable> <br/>			
		<input type="text" name="surname" placeholder="Surname"> <br/>	
		<lable>Email</lable> <br/>			
		<input type="email" name="email" placeholder="Email"> <br/>
		<lable>Password</lable> <br/>			
		<input type="password" name="password" placeholder="Password"> <br/>
		<input type="submit" value="Done" name="Done">
		<input type="reset" value="Reset" name="Reset">
	</form>
</body>
</html>
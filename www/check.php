<?php 
	//print_r($_POST);
	
	// Name
	
	if ($_POST["name"] == "")  {
		echo "Please write name." . "<br/>";
		echo "<a href='/'>Write name</a>" . "<br/>";
	} else {
		header("Location:accaunt.html");
	}

	//Surname

	if ($_POST["surname"] == "") {
		echo "Please write Surname" . "<br/>";
		echo "<a href='/'>Write surname</a>" . "<br/>";
	} else {
		header("Location:accaunt.html");
	}

	//Email

	if ($_POST["email"] == "") {
		echo "Please write Email". "<br/>";
		echo "<a href='/'>Write Email</a>". "<br/>";
	} else {
		header("Location:accaunt.html");
	}

	//Password

	if ($_POST["surname"] == "") {
		echo "Please write password" . "<br/>";
		echo "<a href='/'>Write password</a>" . "<br/>";
	} else {
		header("Location:accaunt.html");
	}
	



 ?>
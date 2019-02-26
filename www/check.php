<?php 
	//print_r($_POST);
	
	
	
	if ($_POST["name"] == "")  {				// Name
		echo "Please write name." . "<br/>";
		echo "<a href='/'>Write name</a>" . "<br/>";
	} else if ($_POST["surname"] == "") {		//Surname
		echo "Please write Surname" . "<br/>";
		echo "<a href='/'>Write surname</a>" . "<br/>";
	}
	else if ($_POST["email"] == "") {			//Email
		echo "Please write Email". "<br/>";
		echo "<a href='/'>Write Email</a>". "<br/>";
	}
	else if ($_POST["text"] == "") {			//Message
		echo "Please write message" . "<br/>";
		echo "<a href='/'>Write message</a>" . "<br/>";
	}

	else	{
		header("Location:accaunt.php");
	}
	

 ?>
<?php


	function sumFunction($summary)
	{
		echo $summary. "<br/>";
	}

	function math($first, $second)
	{
		$mathSum = $first + $second;
		return $mathSum;
	}
	
	$x = 5;
	$y = 15;
	$z = 26;
	$arrayName = array('name' => "John",'surname' => "Smith", "age" => 15);


	function sumOfArray($arrayName){
		$sum = 0;
		for ($i=0; $i <arrayName("age"); $i++) { 
			echo($sum = $z);
		}
	}

//	$sum = $x + $y;
	$sum = math($x, $y);
	sumFunction ($sum);

	echo "<hr> <br/>";
	echo "<hr> <br/>";
	echo "<hr> <br/>";
	echo "<hr> <br/>";


		echo "Array start <br/>";
	$array = array(12, -3.25, "string", true);
	echo $array[1];
	$array[1] = "String";
	$array[2] = 4.25;
	echo "<br/>$array[1]<br/>$array[2]";
	$array[] = "New Element";
	echo "<br/> $array[4]";
	echo "<hr>";

	for ($i=0; $i < count($array); $i++) { 
		echo "Element array with index $i = ".$array[$i]."<br />";
	}

	echo "<hr> <br/>";
	echo "Array <br/>";
	
	$cars = array("Mercedes", "BMW", "Audi", "Opel");
	echo $cars[0] . "<br/>" . $cars[1] . "<br/>". $cars[2];

	echo "<hr> <br/>";

	$sum = 0;
	echo "Array <br/>";
	$classroom = array('first' => 20, 'second' => 18, 'third' => 25, 'forth' => 18);
	foreach ($classroom as $key => $value) {
		if ($value >=22) {
		echo  "In this classroom are " .$value. " childrens. <br/>";
		} else {
			$sum += $value; 
			echo  "In other clasrooms are " .$sum. " childrens. <br/>";
		}
		//echo  "In this school are " .$value. " childrens. <br/>";
		
	}
		echo "<hr> <br />";

	$company = array(
		array('first', 'second', 'third', 'forth'), 
		array('first', 'second'), 
		array('first'), 
		array('first', 'second','third')
	);	

	for ($i=0; $i < count($company); $i++) { 
		for ($j=0; $j < count($company[$i]); $j++) { 
			echo $company[$i][$j] . " | ";
		}
		echo "<br />";
	}
?>
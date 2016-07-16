<html>
<head>
<title>Laptop App 1</title>
<style type="text/css">

#ch3 {color: #00FF00;}

.link {
	font-size: 35px;
	color: "#FFF";
}

.link:hover {
	background-color: #FFF;
	color: #000;	
}


</style>
</head>

<body style="background-color: #000;" >

<a class="link" href="index.php">BACK</a>

<?php
	// --------------------------- START CHAPTER 3 LEARNING ---------------------------
	echo "<div id='ch3'>";
	echo "<<<---------------------------- START CHAPTER 3 LEARNING ---------------------------->>><br /><br />";
	$fname = 'Bradley';   // First Name 
	$lname = 'Bouchard';  // Last Name
	
	$myCounter = 1; // int variable
	$myString = 'Hello World!'; // String variable
	$myArray = array("one", "two", "three");
	
	/* for (String s : $myArray) {
		echo s;
	} */
	
	echo $fname . ' ' . $lname;
	echo "<br>";
	
	$username = 'bbouch';
	
	echo "Username: ".$username;
	
	$username = $fname." ".$lname;
	echo "<br>";
	echo "Username after string concat and overwrite variable: ".$username."<br>";
	
	$intTwo = 5;
	echo "myCounter: ".$myCounter."<br>";
	echo "intTwo: ".$intTwo."<br>";
	echo "added together: ".$myCounter.=$intTwo."<br>";
	echo $myArray[1]."<br>";
	
	// tic tac toe array example
	
	$oxo = array(array('x', ' ', 'o'),
			array('o', 'o', 'x'),
			array('x', 'o', ' '));
	
	echo $oxo[1][2]."<br>";
	$y = 0;
	if($y-- == 0) echo $y."<br>";

	$x = 5;
	
	if($x > 4) {
		$case = "trueeee";
		doLunch($case);
	}
	
	function doLunch($str) {
		echo $str . ": variable added to this.... ".$str."<br>";
		echo "__FUNCTION__ ::: ".__FUNCTION__."<br>";
	}
	
	$author = "Brad Bouchard";
	
	echo "Testing multiple-line commands , test,
	test, test........!!!
	
	- $author.";
	
	$out = <<<_TESTY
	Normal people believe that if it ain't broke, don't fix it.
	Enginners believe that if it ain't broke, it doesn't have enough
	features yet.
	
	- $author.
_TESTY;
echo $out."<br>";

	$num1 = 120 * 20;
	echo $num1."<br>";
	echo "Substring ::: ".substr($num1, 1, 1)."<br>";
	$pi = "3.1415927";
	$radius = 5;
	echo "PI * (radius^2) ::: ".$pi * ($radius * $radius)."<br>";
	
	// PRACTICING CONSTANTS
	define("ROOT_LOCATION", "/usr/local/www/"."<br>");
	
	$directory = ROOT_LOCATION;
	echo $directory;
	
	// PRACTICING MAGIC CONSTANTS
	echo "----- MAGIC CONSTANTS -----"."<br>";
	echo "__LINE__ ::: ".__LINE__."<br>";
	echo "__FILE__ ::: ".__FILE__."<br>";
	echo "__DIR__ ::: ".__DIR__."<br>";
	echo "__CLASS__ ::: ".__CLASS__."<br>";
	echo "__METHOD__ ::: ".__METHOD__."<br>";
	echo "__NAMESPACE__ ::: ".__NAMESPACE__."<br>";
	
	// 2nd Function -- Date Function
	function longDate($timestamp) {
		$temp = date("l F jS Y", $timestamp);
		return "THE DATE IS: $temp";
	}
	echo longDate(time())."<br>";
	echo " - 17 days (time() - 17 * 24 * 60 * 60) ::: ".longDate(time() - 17 * 24 * 60 * 60)."<br>";
	
	// Static Variable test
	function staticVaribleCount() {
		static $count = 0;
		echo "COUNT ::: ".$count."<br>";
		$count++;
	}
	
	for($i = 0; $i < 3; $i++) {
		staticVaribleCount();
	}
	
	// Superglobal
	//$came_from = $_SERVER['HTTP_REFERER'];
	//echo "CAME FROM SUPERGLOBAL ::: ".$came_from;
	
	echo "<br><<<---------------------------- END CHAPTER 3 LEARNING ---------------------------->>>";
	echo "</div>";
	// ---------------------------- END CHAPTER 3 LEARNING ----------------------------
	
?>

</body>

</html>


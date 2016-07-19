<html>
<head>
<title>Laptop App 1</title>
<style type="text/css">

#ch5 {color: #FF0000;}

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

// ---------------------------- START CHAPTER 5 LEARNING ----------------------------
echo "<div id='ch5'>";
echo "<br><br><<<---------------------------- START CHAPTER 5 LEARNING ---------------------------->>><br><br>";

//phpinfo();

echo "Original String: .dlrow olleH ".strrev(" .dlrow olleH")."<br>";
echo "String Repeat: Win x 4 ".str_repeat("Win", 4)."<br>";
echo "str to upper: babes ".strtoupper("babes")."<br>";

$lowered = strtolower("aNY # of Letters and Punctuation you WANT");
echo $lowered."<br>";

$ucfixed = ucfirst($lowered);
echo $ucfixed."<br>";

// print function
print (5-8)."<br>";
print (abs (5-8))."<br>";

// Fix Names function

echo fix_names("BRADLEY", "steven", "bouCHARd");

function fix_names($n1, $n2, $n3) {
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	
	return $n1 . " " . $n2 . " " . $n3 . "<br>";
}

$a1 = "BRADLEY";
$a2 = "steven";
$a3 = "bouCHARd";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_name();
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_name() {
	global $a1; $a1 = ucfirst(strtolower($a1));
	global $a2; $a2 = ucfirst(strtolower($a2));
	global $a3; $a3 = ucfirst(strtolower($a3));
}

if(function_exists("ucfirst")) {
	echo "Function exists<br>";
}
else {
	echo "Function does not exist - better write your own!<br>";
}

// Declaring a class
$object1 = new User;
print_r($object1); echo "<br>";

$object1->name = "Brad";
$object1->password = "Bouch";

print_r($object1); echo "<br>";

$object1->save_user();

class User {
	public $name, $password;
	
	function save_user() {
		echo "Save User code goes here!<br>";
		echo "IN SAVE USER ::: ".$this->name. " " . $this->password."<br>";
	}
	
	function get_password() {
		return $this->password;
	}
}

$object2 = new User2();
$object2->name = "Alice";
$object3 = clone $object2;
$object3->name ="Amy";

echo "object2 name = " . $object2->name . "<br>";
echo "object3 name = " . $object3->name . "<br>";

$object4 = new User;
$object4->password = "secrettt";

echo $object4->get_password();

class User2 {
	public $name;
}

echo "<br><<<---------------------------- END CHAPTER 5 LEARNING ---------------------------->>>";
// ---------------------------- END CHAPTER 5 LEARNING ----------------------------
echo "</div>";

?>

</body>

</html>


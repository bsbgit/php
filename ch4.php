<html>
<head>
<title>Laptop App 1</title>
<style type="text/css">

#ch4 {color: #FFD700;}

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

// ---------------------------- START CHAPTER 4 LEARNING ----------------------------
echo "<div id='ch4'>";
echo "<br><br><<<---------------------------- START CHAPTER 4 LEARNING ---------------------------->>><br><br>";
echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";
echo "e: [" . TRUE . "]<br>";
echo "f: [" . FALSE . "]<br>";

$myname = "Bouch";
$myage = 34;
echo "A: " . 28 . "<br>"; // Numeric literal
echo "B: " . "Hello World" . "<br>"; // String literal
echo "C: " . FALSE . "<br>"; // Constant literal
echo "D: " . $myname . "<br>"; // String variable
echo "E: " . $myage . "<br>"; // Numeric variable

// Assigning value and testing equality
$month = "March";
if($month == "March") echo "It's springtime!<br>";

// equality and identity operators
$varA = "1000";
$varB = "+1000";

echo '$varA = '.$varA."<br>";
echo '$varB = '.$varB."<br>";

echo 'EQUALITY ::: if ($varA == $varB) echo "1" ::: ';
if($varA == $varB) echo "1";        // AUTO CONVERTS AND EVALUATES
echo "<br>";
echo 'IDENTITY ::: if ($varA === $varB) echo "2" ::: ';
if($varA === $varB) echo "2";     // DOESN'T AUTO CONVERT, TAKES BOTH AS LITERAL(STRING) AND EVALUATES
echo "<br>";

// Inequality and not-identical operators
$varC = "3000";
$varD = "+3000";

echo '$varC = '.$varC."<br>";
echo '$varD = '.$varD."<br>";

echo 'INEQUALITY ::: if ($varC != $varD) echo "1" ::: ';
if($varC != $varD) echo "1";        // AUTO CONVERTS AND EVALUATES
echo "<br>";
echo 'NOT-IDENTICAL ::: if ($varC !== $varD) echo "2" ::: ';
if($varC !== $varD) echo "2";     // DOESN'T AUTO CONVERT, TAKES BOTH AS LITERAL(STRING) AND EVALUATES
echo "<br>";

// Comparison Operators
$varE = 2;
echo '$varE = '.$varE."<br>";
$varF = 3;
echo '$varF = '.$varF."<br>";

if ($varE > $varF) echo "$varF is greater than $varF<br>";
if ($varE < $varF) echo "$varE is less than $varF<br>";
if ($varE >= $varF) echo "$varE is greather than or equal to $varF<br>";
if ($varE <= $varF) echo "$varE is less than or equal to $varF<br>";

// Logical Operators
$varG = 1;
echo '$varG = '.$varG."<br>";
$varH = 0;
echo '$varH = '.$varH."<br>";

echo "($varG AND $varH)".($varG AND $varH) . "<br>";
echo "($varG or $varH)".($varG or $varH) . "<br>";
echo "($varG XOR $varH)".($varG XOR $varH) . "<br>";
echo "!$varG".!$varG . "<br>";

// Conditionals ... Nonlooping, switch, ?
// If elseif else
$bankbalance = 110;
$savings = 1000;
echo "Bank balance before conditional ::: ".$bankbalance."<br>";
if ($bankbalance < 100) {
	$money = 1000;
	$bankbalance += $money;
	echo "IF ::: "."<br>";
	echo "Bank Balance: $".$bankbalance."<br>";
}
elseif ($bankbalance > 200) {
	echo "ELSEIF :::"."<br>";
	$savings += 100;
	$bankbalance -= 100;
	echo "SAVINGS TOTAL: $".$savings."<br>";
	echo "Bank Balance: $".$bankbalance."<br>";
}
else {
	$savings += 50;
	$bankbalance -= 50;
	echo "ELSE :::"."<br>";
	echo "SAVINGS TOTAL: $".$savings."<br>";
	echo "Bank Balance: $".$bankbalance."<br>";
}

// switch statement

$page = "Links";
switch ($page) {
	case "Home":
		echo "You selected ".$page;
		break;
	case "About":
		echo "You selected ".$page;
		break;
	case "News";
	echo "You selected ".$page;
	break;
	case "Login":
		echo "You selected ".$page;
		break;
	case "Links":
		echo "You selected ". $page;
		break;
	default:
		echo "Unrecognized Choice";
		break;
}
echo "<br>";

// ? Operator

$fuel = 2;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
echo "<br>";
$enough = $fuel <= 1 ? FALSE : TRUE;
echo "ENOUGH ?? ".$enough;
echo "<br>";

// while loops
echo "<-------- WHILE LOOPS ----------><br>";
$count = 1;
while ($count <= 12) {
	echo "$count time 12 is ". $count * 12 . "<br>";
	++$count;
}

$count = 0;
// better way
while (++$count <= 12) {
	echo "$count times 12 is " .$count * 12 . "<br>";
}

// do while loops
echo "<-------- DO WHILE LOOPS ----------><br>";
$countB = 3;
do
	echo "$countB times 5 is " . $countB * 5 . "<br>";
while(++$countB <= 12);

$countC = 1;

do {
	echo "$countC times 7 is " .$countC * 7;
	echo "<br>";
} while (++$countC <= 12);

// For Loops
echo "<-------- FOR LOOPS ----------><br>";
for ($countD = 1; $countD <= 12; ++$countD) {
	echo "$countD times 15 is " . $countD * 15;
	echo "<br >";
}

for ($iA = 1, $iB = 3; $iA + $iB <= 20; $iA+=2, $iB++) {
	echo '$iA = '.$iA."<br>";
	echo '$iB = '.$iB."<br>";
	echo '$iA + $iB = '.($iA+$iB)."<br>";
}

// Trapping division by zero ... using continue statement
$j = 10;

while ($j > -10) {
	$j--;
	if ($j == 0) continue; // if it == zero skipping this case and continue
	echo (10 / $j) . "<br>";
}

// Implicit casting vs Explicit casting
// PHP 'auto casts' to the most likely type, ie in example below
$aa = 56;
$bb = 12;
$cc = $aa / $bb;

echo '$cc '.$cc."<br>";

// Explicit casting
$ccc = (int) ($aa / $bb);
echo '$ccc '.$ccc."<br>";

echo "<br><<<---------------------------- END CHAPTER 4 LEARNING ---------------------------->>>";
echo "</div>";
// ---------------------------- END CHAPTER 4 LEARNING ----------------------------
	
?>

</body>

</html>


<html>
<head>
<title>Laptop App 1</title>
<style type="text/css">

#ch6 {color: #E517CA;}

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

// ---------------------------- START CHAPTER 6 LEARNING ----------------------------
echo "<div id='ch6'>";
echo "<br><br><<<---------------------------- START CHAPTER 6 LEARNING ---------------------------->>><br><br>";

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
echo "<br>";

for($j = 0; $j < 4; ++$j) {
	echo "$j: $paper[$j]<br>";
}
echo "<br>";

$p2 = array('copier'=>"Copier and Multipurpose", 'inkjet'=>"Inkjet Printer", 'laser'=>"Laser Printer",
		'photo'=>"Photo Printer Paper");
foreach($p2 as $p) {
	echo"Val in array: $p<br>";
}




echo "<br><<<---------------------------- END CHAPTER 6 LEARNING ---------------------------->>>";
// ---------------------------- END CHAPTER 6 LEARNING ----------------------------
echo "</div>";

?>

</body>

</html>


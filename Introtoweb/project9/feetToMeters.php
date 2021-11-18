<!DOCTYPE html>
<html  lang="en">
<head>
	<title>FeetToMeters 2</title>
</head>
<body>

<?php
echo "<h2>"."Converting Feet to Meters By:Hussein Alsowadi"."</h2>"."<br>";
//variables
$feet = rand ( 1 , 100);
$meters = ($feet*0.305);
$text1 ="This program will generate a random number to represent a value for feet and return the converted measurement in meters.";

print "$text1";
echo "<p>"."Random number in feet: "."$feet"."</p>";

echo "<h3> Result: $feet feet is $meters meters</h3>";

?> 

</body>
</html>

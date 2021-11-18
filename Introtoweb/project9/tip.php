<!DOCTYPE html>
<html  lang="en">
<head>
	<title>Tip Calculator 2</title>
</head>
<body>

<?php
echo "<h2>"."Calculating Tips By:Hussein Alsowadi"."</h2>"."<br>";
//variables
$total = rand ( 1 , 100);
$tip=($total*0.2);
$total_with_tip = ($total+$tip);
$text1 ="This program will compute the tip based on the amount paid for the service and based on the percent for the tip.";
$text2="Percentage of the tip: 20%";

print "$text1";
echo "<p>"."Random number for the total amount "."$total"."</p>";
print"$text2";
echo "<h3> Result: $$total with 20% tip of $$tip will total $$total_with_tip </h3>";

?> 

</body>
</html>

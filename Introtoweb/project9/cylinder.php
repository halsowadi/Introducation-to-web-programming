<!DOCTYPE html>
<html  lang="en">
<head>
	<title>Cylinder Calculator 2</title>
</head>
<body>

<?php
echo "<h2>"."Program by: Hussein Alsowadi"."</h2>"."<br>";
//variables
$cylinder_length = rand ( 2 , 50);
$cylinder_radius = rand ( 2 , 30);
$area = (pi()*$cylinder_radius*$cylinder_radius);
$volume =(pi()*$cylinder_radius*$cylinder_radius*$cylinder_length);
$text1 ="This program will take the radius and length of a cylinder, given as real numbers, and will compute the area and volume of the cylinder, also displayed as real numbers.";
$text2="<h3> Results: </h3>";

print "$text1";
echo "<p>"."Random number radius of the cylinder: "."$cylinder_radius"."</p>";
echo "<p>"."Random number of the length of the cylinder: "."$cylinder_length"."</p>";
print "$text2";
echo "<p>" . "The area is:  "."$area"."</p>";
echo "<p>"."The volume is: "."$volume"."</p>";
?> 

</body>
</html>

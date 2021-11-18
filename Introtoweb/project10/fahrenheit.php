<!DOCTYPE html>
<html  lang="en">
<head>
	<title>Fahrenheit to Celsius</title>
</head>
<body>

<?php
echo "<h2>"."Fahrenheit to Celsius by:Hussein Alsowadi"."</h2>"."<br>";
//variables
//random die function
function getFahrenheit(){
return rand(-50,120);
}
//declaring array
$fahrenheitArray=[];
$celsiusArray=[];
//filling fahrenheit array
for($i=0; $i<5;$i++){
$fahrenheitArray[$i]=getFahrenheit();
}
//filling celsiusArray
for($i=0; $i<5;$i++){
$celsiusArray[$i]=(($fahrenheitArray[$i]-32)*5)/9;
}
$text1 ="This program will generate 5 random temperatures in Fahrenheit between -50-120 and convert them to Celsius.";


//printing arrays 
echo "<b>Fahrenheit:</b>"."&nbsp;"." &nbsp;"."<b> Celsius:</b><br>";
for($i=0;$i<count($fahrenheitArray);$i++){
echo $fahrenheitArray[$i]."&nbsp;"." &nbsp;"." &nbsp;"." &nbsp;"." &nbsp;"." &nbsp;"." &nbsp;"." &nbsp;"."&nbsp;"." &nbsp;".round($celsiusArray[$i],2)."<br> ";
}
?> 

</body>
</html>
<!DOCTYPE html>
<html  lang="en">
<head>
	<title>Rolling a Die</title>
</head>
<body>

<?php
echo "<h2>"."Rolling a Die by:Hussein Alsowadi"."</h2>"."<br>";
//variables
$one=0;
$two=0;
$three=0;
$four=0;
$five=0;
$six=0;
//random die function
function getDie(){
return rand(1,6);
}
//declaring array
$dieArray=[];
//filling array
for($i=0; $i<50;$i++){
$dieArray[$i]=getDie();
if ($dieArray[$i]==1){
$one++;
}
else if ($dieArray[$i]==2){
$two++;
}
else if ($dieArray[$i]==3){
$three++;
}
else if ($dieArray[$i]==4){
$four++;
}
else if ($dieArray[$i]==5){
$five++;
}
else if ($dieArray[$i]==6){
$six++;
}
}

$text1 ="This program will generate 50 random dice rolls.";

print "$text1";

echo "<h3> Dice rolls: </h3>";

//printing array
for($i=0;$i<count($dieArray);$i++){
print $dieArray[$i]." ";
if ($i==9||$i==19||$i==29||$i==39||$i==49){
print "<br>";
}
}
echo "<p> you rolled <b>one:</b> $one times, you rolled <b>two:</b> $two times, you rolled <b>three:</b> $three times, you rolled
<b>four:</b> $four times, you rolled <b>five:</b> $five times, and you rolled <b>six:</b> $six times." ;
?> 

</body>
</html>
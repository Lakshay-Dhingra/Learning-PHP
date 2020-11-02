<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorial</title>
</head>
<body>

<?php

/////////////////////////////////////Basics/////////////////////////////////////////////
//This is a comment
#This is another comment
/*This is a
Multiline comment

echo "Hello World!<br>";

$a=125.3;
var_dump($a);
echo "<br>";
$x=true;
echo $x;
echo "<br>";
$y=false;
echo $y;
echo "<br>";
var_dump($y);
echo "<br>";
$b=44;
$A="This is a string.";
ECHO $a+$b;
echo "<br>";
var_dump($A);
echo "<br>";
Echo $A
$fruits =array('apple','mango','Orange');
var_dump( $fruits);
$myvar=null;

//////////////////////////////////////Strings///////////////////////////////////////////

$str="my name is";
echo strlen($str),"<br>";
echo str_word_count($str),"<br>";
echo strrev($str),"<br>";
echo strpos($str, 'name'),"<br>";
echo str_replace("is","are",$str);

/////////////////////////////////////Constants////////////////////////////////////////////

define("pi",3.1428);
echo pi;

//////////////////////////////////////Operators//////////////////////////////////////////

echo 4/3,"<br>";
echo 4**3;

///////////////////////////////////Date, If-else///////////////////////////////////////////

$t=date("H");
if($t==0)
{
	echo $t." is Midnight";
}
else if($t>20 or $t<5)
{
	echo $t." is Night Time...";//. operator is used for string concatenation

}
else
{
	echo $t." is Day Time...";
}

date_default_timezone_set("Asia/Kolkata");
echo "<br>",date_default_timezone_get();

///////////////////////////////Loops, Break and Continue///////////////////////////////////

$i=0;
while ($i <= 9)
{
	$i++;
	if($i==4)
		continue;
	echo $i,"<br>";
}

for ($i=0; $i<5; $i++)
{ 
	echo $i;
	if($i==3)
		break;
}

$i=5;
do
{
	echo $i;
	$i++;
} while ( $i<= 10);

/////////////////////////////////////Functions/////////////////////////////////////////////

function avg($num1,$num2)
{
	return ($num1+$num2)/2;
}

echo avg(24,28);

//////////////////////////////////////Arrays, For-each loop///////////////////////////////////////////////

$numbers=array(45,627,1,8,32,90);
sort($numbers);		//in ascending order
$len=count($numbers);
echo "length of array is: ".$len,"<br>";
for($i=0;$i<$len;$i++)
{
	echo $numbers[$i],"<br>";
}
rsort($numbers);	//in descending order
foreach ($numbers as $key)
{
	echo $key,"<br>";
}
*/



?>

</body>
</html>
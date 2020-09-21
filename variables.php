<?php
    // Single line comments
	# Single line comment

/*
Multi line comment
*/

#Variables

/*     
     - Prefix = $
	 - start with a letter or underscore _
	 - Only letters numbers and underscore
	 - Case sensitive
*/

	 #DATA Types 

/*
	String
	Integers
	Floats
	Booleans
	Arrays
	Objects
	NULL
	Resource

*/

$output = 'Hello World!';
$num1 = 5;
$num2 = 12;
$sum = $num1 + $num2;
$string1 = 'Hello';
$string2 = 'World';

$greeting = $string1 .' '. $string2;
$greeting2 = "$string1 $string2";

$string3 = 'theyre amazin'; 

$float = 4.4;
$bool1 = true;

//    usually upper - the value - case insensitive - true 
 define('GREETING', 'Hello Everyone', true);

echo greeting;
?>
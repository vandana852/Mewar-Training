<?php

$a=array(5,15,25);
echo array_sum($a);


$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);


//Remove the first element (red) from an array, and return the value of the removed element:


$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);

//Replace the values of the first array ($a1) with the values from the second array ($a2):

$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));

//Merge two arrays into one array:


$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));

//Create an array by using the elements from one "keys" array and one "values" array:


$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

//Compare the values of two arrays, and return the differences:


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);



?>
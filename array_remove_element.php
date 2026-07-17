<?php
$users = ["Aman","Ashish","Aditya","Ajay"];
//print_r($users);
//array_pop($users);  //single element remove



array_push($users,"Vandana","Tony","Aayu"); 
//print_r($users);

array_splice($users,-2);  //multiple elements remove
print_r($users);
?>
<?php
$name = "Peter";
function getName(){
	//$name = "tony";  ////local variable
	global $name;
	echo "local variable is $name";
}
echo $name;
echo '<br>';
getName();
?>
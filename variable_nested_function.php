<?php
$name = "Peter";
function getName(){
	$name = "tony";  ////local variable
	echo $name;
	function innerTest(){
		$name = "Anil";
		echo $name;
	}
}
getName();
echo '<br>';
echo $name;
echo '<br>';
innerTest();



?>
<?php
$userDetails = [
    "name" => "anil",
    "age" => 29,
    "city" => "delhi",
    "email" => "abc@test.com",
    "state" => "UP"
];

// echo $userDetails["name"];
// echo "<br>";
// echo $userDetails["age"];
// echo "<br>";
// echo $userDetails["state"];

foreach ($userDetails as $key => $data) {
	echo $key ." is ".$data;
	echo "<br>";
}
?>

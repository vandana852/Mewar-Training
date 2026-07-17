<?php
$users=[
	[1, "anil", "noida","anil@test.com"], 
	[2,"sam", "delhi","sam@test.com" ], 
	[3, "peter", "gurgaon", "peter@test.com"]
];

for($i=0;$i<count($users); $i++)
{ 
    // print_r($users [$i]);
	for ($j=0;$j<count($users[$i]); $j++)
		{ 
			echo $users [$i][$j];
			echo "<br>";
        }
}
?>

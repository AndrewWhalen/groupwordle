<?php
define('STDIN',fopen("php://stdin","r"));

$entityBody = stream_get_contents(STDIN);

echo $entityBody;
$file = 'people.txt';

// Open the file to get existing content
$temp = fopen($file, 'w') or die("Can't create file");

$current = file_get_contents($temp);

// Write the contents back to the file
file_put_contents($file, $entityBody);

?>

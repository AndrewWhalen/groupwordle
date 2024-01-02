<?php

$entityBody = file_get_contents('php://input');

echo $entityBody;
$file = 'people.txt';

// Open the file to get existing content
$temp = fopen($file, 'w') or die("Can't create file");

$current = file_get_contents($file);

// Write the contents back to the file
file_put_contents($file, $entityBody);

?>

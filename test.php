<?php
echo '<p>Hello World</p>';
$file = 'people.txt';

// Open the file to get existing content
$temp = fopen($file, 'w') or die("Can't create file");

$current = file_get_contents($file);
// Append a new person to the file

$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $current);

?>

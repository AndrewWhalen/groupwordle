<?php

$entityBody = file_get_contents('php://input');
$file = 'people.txt';

if ($entityBody != "") {
    $temp = fopen($file, 'w') or die("Can't create file");
    file_put_contents($file, $entityBody);
} else {
    echo $current = file_get_contents($file);
}

?>

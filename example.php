<?php


$filename = 'names.csv';

if (!file_exists($filename)) {
    echo 'File not found';exit;
}

$handle = fopen('names.csv','r');

while ($row = fgetcsv($handle)) {
    $result = mail($row[1],'Lecture', 'Massage {$filename} [!]');
    echo "$row[0]: $row[1]", PHP_EOL;
    sleep(1);
}

fclose($handle);

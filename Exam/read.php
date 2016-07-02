<?php

$file=fopen("text.txt","r");
$students=[];
while(!feof($file)) {
    $line = fgets($file);
    $row= explode("|",$line);
    $students[]=$row;
}
fclose($file);

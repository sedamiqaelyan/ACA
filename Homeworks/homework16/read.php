<?php
    
    $file=fopen("users.txt","r");
    $users=[];
    while(!feof($file)) {
        $line = fgets($file);
        $row= explode(" ",$line);
        $users[]=$row;
   }
    fclose($file);


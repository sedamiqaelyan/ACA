<?php
define('ROOT_PATH',"/var/www/html/day18/");
function myScandir($path="") {
    if($path=="") {
        $path=ROOT_PATH;
    }
    $result=scandir($path);

    $dotSearchResults=array_search(".",$result);
    $twoDotSearchResult=array_search("..",$result);
    unset($result[$dotSearchResults]);
    unset($result[$twoDotSearchResult]);

    foreach ($result as $index=>$item) {
        $nestedPath=$path.$item.'/';
        if(is_dir($nestedPath)) {
            $nestedList=myScandir($nestedPath);
            unset($result[$index]);
            $result[$item]=$nestedList;
        }
    }
    return $result;

}
echo "<pre>";
var_dump(myScandir());
echo "</pre>";


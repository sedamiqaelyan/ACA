<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/18/16
 * Time: 9:19 AM
 */
$myPhpArray=[
    "key1"=>[1,2,3,4],
    "key2"=>[1,2,3,4],
    "key3"=>[1,2,3,4],
];
echo  "<script>";
/*echo "var myJsArray=[";
foreach ($myPhpArray as $i=>$item) {
    if($i==count($myPhpArray)-1) {
        echo $item;
    } else {
        echo $item . ',';
    }
}
echo "];";*/
echo "<pre>";
echo json_encode($myPhpArray);
echo "</<script>";
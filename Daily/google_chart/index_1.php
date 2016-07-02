function drawChart() {
var data = google.visualization.arrayToDataTable;
<?php
$i = 0;
echo '[';
echo '[ "Char", "Count"],';
foreach ($charArray as $key => $value) {
    if ($i != count($charArray) -1 ){
        echo '[ "' . $key . '" , ' . $value . '],';
        $i++;
    } else {
        echo '[ "' . $key . '" ,' . $value . ']';
    }
}
echo ']';
?>);
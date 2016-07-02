<?php
/*$myFile = fopen("text.txt", "r");
$alphabet=['a','b','c','d','e','f','g','h','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$data=[];
while (false !== ($char = fgetc($myFile))) {
    if(in_array($char,$alphabet)) {
        if(isset($data[$char])) {
            $data[$char]++;
        } else {
            $data[$char]=1;
        }
    }
}*/
$myFile=fopen("text.txt","r");
$array=[];
while(!feof($myFile)) {
    $array=explode(" ",fgets($myFile));
}
fclose($myFile);
$bararray=[];
for ($i=0;$i<count($array);$i++){
    if(isset($bararray[strlen($array[$i])])) {
        $bararray[strlen($array[$i])]++;
    } else {
        $bararray[strlen($array[$i])]=1;
    }
}
rsort($bararray);
var_dump($bararray);
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Character','Count'],
                <?php
               // foreach ($bararray as $key=>$value)
                // {
                 //       echo "['" . $key. "',".$value.'],';
                //    }
                for($i=0;$i<5;++$i) {
                    echo "['" . $i. "',".$bararray[$i].'],';
                }
                ?>
            ]);

            var options = {
                title: 'Alphabet',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>
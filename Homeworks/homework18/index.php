<!DOCTYPE html>
<?php
$myFile = fopen("text.txt", "r");
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
}
arsort($data);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Character','Count'],
                <?php
                for($i=0;$i<5;++$i)
                // foreach ($data as $key=>$value)
                {
                       echo "['" . $i. "',".$data[$i].'],';
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
<div class="container">
    <div class="row">
        <h2 style="margin-left: 200px;">Amenashat 5 tarer@ voronq handipum en file-um</h2>
        <div class="col-xs-12" style="margin-left:130px;">
            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<?php
    $myFile=fopen("text.txt","r");
    $array=[];
    while(!feof($myFile)) {
        $array=explode(".",fgets($myFile));
    }

    fclose($myFile);
    $chararray=[];

    for ($i=0;$i<count($array)-1;$i++){
        if(isset($chararray[$array[$i]])) {
           $chararray[$array[$i]]++;
        } else {
            $chararray[$array[$i]]=1;
        }
    }
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
                $count=1;
                foreach($chararray as $key=>$value ) {
                    echo "['" . $key. "',".$value.'],';
                    ++$count;
                }
                ?>
            ]);

            var options = {
                title: 'Sentences',
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
        <h2 style="margin-left: 300px;">Count of senteces in the text</h2>
        <div class="col-xs-12" style="margin-left:130px;">
            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
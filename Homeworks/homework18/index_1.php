<!DOCTYPE html>
<?php
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
                    for($i=0;$i<5;++$i) {
                        echo "['" . $i. "',".$bararray[$i].'],';
                    }
                ?>
            ]);

            var options = {
                title: 'Words',
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
        <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <h2 style="text-align: center;">5 longest words in the text</h2>
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<html>

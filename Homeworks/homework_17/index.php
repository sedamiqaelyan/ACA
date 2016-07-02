<!DOCTYPE html>
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
</head>
<style>
    .border {
        display: inline-block;
        float: left;
        height: 50px;
        width: 50px;
    }
</style>
<body>
<div class="container" style="width: 350px;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?php
                $daysInMonth = [];
                for ($i=0;$i<12;$i++) {
                    $daysInMonth[] = cal_days_in_month(CAL_GREGORIAN, $i + 1, 2016);
                }
                for($i=0;$i<count($daysInMonth);++$i) {
                    echo '<div class="border">Mon</div>';
                    echo '<div class="border">Thus</div>';
                    echo '<div class="border">Wend</div>';
                    echo '<div class="border">Trs</div>';
                    echo '<div class="border">Fri</div>';
                    echo '<div class="border">Sut</div>';
                    echo '<div class="border">Sun</div>';

                    $firstDay = date('w', strtotime('1-'.($i+1).'-2016'));
                    for($j=1;$j<$firstDay;++$j) {
                        echo '<div class="border"></div>';
                    }
                    for ($k = 1; $k <= $daysInMonth[$i]; ++$k) {
                        echo '<div class="border">' . $k . '</div>';
                    }
                }
            ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>


<!DOCTYPE html>
<?php
    session_start();
    $q3=$_POST['q3'];
    $_SESSION['q3']=$q3;
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="text-align: center;">
            <h1 style="text-align: center;">Թեստ աշխարհագրությունից</h1>
            <img src="image.jpg" style="height: 300px;">
            <h4 style="text-align: center;">Հարց 4 </h4>
            <p><h2 style="text-align: center;color: #2aabd2;">ԱՅՍ ԵՐԿՐՆԵՐԻՑ Ո՞ՐԸ ՉՈՒՆԻ ԵԼՔ ԴԵՊԻ ՄԻՋԵՐԿՐԱԿԱՆ ԾՈՎ.</h2></p>
            <h4 style="text-align: center;">Գրել տարբերակներից մեկը: </h4>
            <form method="post" action="page5.php">
                <!-- <label for="first_name">First Name</label>-->
                <ul type="none">
                    <li><h5>Egypt</h5></li>
                    <li><h5>Cyprus</h5></li>
                    <li><h5>Slovenia</h5></li>
                    <li><h5>Serbia</h5></li>
                </ul>
                <input style="margin-left: 100px;" type="text" name="q4" title="Q4">
                <input type="submit" value="Next>>">
            </form>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

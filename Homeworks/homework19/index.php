<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ACA-Homework</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<style>
    span{
        color: orange;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><h1>File manager</h1>
            <?php
                define('ROOT_PATH',"/var/www/html/day18/");
            //var_dump($folderTime);
                $path=$_GET['path'];
                $array=scandir(ROOT_PATH.$path);
                foreach ($array as $key=>$value) {
                    if(is_dir(ROOT_PATH . $path . '/' . $value)) {
                        echo '<a href="?path='.$path.'/'.$value.'"><span class="glyphicon glyphicon-folder-open"></span>'.'             '.$value.'</a><br>';
                    } else {
                        echo  $value.'<span class="glyphicons glyphicons-file"></span>'.'<br>';
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
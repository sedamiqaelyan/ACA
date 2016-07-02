<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACA-Homework</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
<form>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="#" name="1">
        <input type="text" class="form-control" placeholder="tittle" name="2">
        <input type="text" class="form-control" placeholder="lecturer"  name="3">

        <button type="submit">Add</button>
    </div>
</form>

<a href="courses.php"> <button>Back</button></a>
<?php
if(isset($_GET["1"]) && isset($_GET["2"]) && isset($_GET["3"])) {
    $newUser[] = $_GET["1"];
    $newUser[] = $_GET["2"];
    $newUser[] = $_GET["3"];
    $array[] = $newUser;
    //var_dump($newUser);
    include 'read.php';
    //var_dump($array);
    foreach ($array as $key => $value) {
        array_push($students, $array[$key]);
    }
    var_dump($students);
    $myfile = fopen("text.txt", "w") or die("hgcdmfhdcm");
    for ($i = 0; $i < count($students); ++$i) {
        if ($i == count($students)-1) {
            $line =PHP_EOL.$students[$i][0] . '|' . $students[$i][1] . '|' . $students[$i][2];
        } else {
            $line =$students[$i][0] . '|' . $students[$i][1] . '|' . $students[$i][2];
        }
        fwrite($myfile, $line);
    }
    fclose($myfile);
}
?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
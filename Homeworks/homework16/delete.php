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
        <input type="text" class="form-control" placeholder="Number" name="number">
        <input type="text" class="form-control" placeholder="Firstname" name="name">
        <input type="text" class="form-control" placeholder="Lastname"  name="lname">
        <input type="text" class="form-control" placeholder="Age" name="age">
        <input type="text" class="form-control" placeholder="Nation" name="nation">
        <button type="submit">Submit</button>
    </div>
</form>
<a href="index.php"> <button>Back</button></a>
<?php
if(isset($_GET["number"]) && isset($_GET["name"]) && isset($_GET["lname"]) && isset($_GET["age"]) && isset($_GET["nation"])) {
    $deleteUser[] = $_GET["number"];
    $deleteUser[] = $_GET["name"];
    $deleteUser[] = $_GET["lname"];
    $deleteUser[] = $_GET["age"];
    $deleteUser[] = $_GET["nation"];
    include 'read.php';
    //var_dump($deleteUser);
    var_dump($users[1]);
    for ($i = 0; $i < count($users); ++$i) {
        if ($users[$i]['0'] == $deleteUser['0'] ) {
            $index = $i;
            var_dump($index);
        }
    }
    $myfile = fopen("users.txt", "w") or die("hgcdmfhdcm");
    for ($i = 0; $i <count($users); ++$i) {
        if ($i == $index) {
            $line1 =$users[$i][0] . ' ' . $users[$i][1] . ' ' . $users[$i][2] . ' ' . $users[$i][3] . ' ' . $users[$i][4];
        } else {
            $line =$users[$i][0] . ' ' . $users[$i][1] . ' ' . $users[$i][2] . ' ' . $users[$i][3] . ' ' . $users[$i][4];
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



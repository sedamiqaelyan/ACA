<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form action="index.php">
                    <input type="text" name="a">x*x+<input type="text" name="b">x+<input type="text" name="c">=0<br>
                    <button  style="margin-left:250px;margin-top: 10px;" type="submit">Calculate</button><br>
                </form>
            </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<?php
    function calculate($a,$b,$c) {
        $d=$b*$b-(4*$a*$c);
        if($d>=0){
            echo '<input type="text"  style="margin-left:475px;margin-top: 10px;text-align:center;" name="rezult" value="'."X1=" .
                (-$b+sqrt($d))/(2*$a).'"/>';
            echo '<input type="text"  style="margin-left:475px;margin-top: 10px;text-align:center;" name="rezult" value="'."X2=" .
                (-$b-sqrt($d))/(2*$a).'"/>';
        } else {
            echo  '<input type="text"  style="margin-left:475px;margin-top: 10px;" name="rezult" value="'." d<0".'"/>';
            
        }
    }
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']));
    calculate(($_GET['a']),($_GET['b']),($_GET['c']));

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
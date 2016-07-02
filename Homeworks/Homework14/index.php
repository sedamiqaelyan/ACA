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
<div class="container">
    <div class=row>
        <div class="col-xs-12">
            <?php
                $x=10;
                $y=5;
                for($i=0;$i<$x;++$i){
                    echo '<span class="row"></span>';
                    for($j=0;$j<$y;++$j) {
                        echo '<span class="col-sm-1"></span>';
                        if($i==0 || $i==$x-1 || $j==0 || $j==$y-1) {
                            echo '<span class="border"  style="border:1px solid black;width:20px;padding:10px;background-color: red;"></span>';
                        } else {
                            echo '<span class="border"  style="border:1px solid black;width:20px;padding:10px;background-color: green;"></span>';
                        }
                    }
                }
				?>

        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
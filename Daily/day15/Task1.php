
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<input name="fib" type="text">
<?php
if(isset($_GET['fib'])){
echo fibonachi($_GET['fib']);
    function fibonachi($x) {
        if($x==0)
            return 1;
        if($x==1)
            return 1;
        return fibonachi($x-1)+fibonachi($x-2);

    }
?>

</body>
</html>
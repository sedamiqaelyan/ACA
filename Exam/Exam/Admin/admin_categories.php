<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- build
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    input {
        margin-top: 10px;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
            <div class="menu" style="position: fixed;width: 200px;background-color:#f5f5f5;height: 100%;">
                <ul class="nav nav-pills nav-stacked" style="margin-top: 40px;">
                    <li role="presentation"><a href="admin_categories.php">Categories</a></li>
                    <li role="presentation"><a href="admin_news.php">News</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-10">
            <h1 class="page-header">Categories<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Category</button></h1>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Course</h4>
                        </div>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="title" name="title">
                                <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php
            require_once "Tools.php";
            $tools=new Tools();
            $cats=$tools->getFromTable('category');

            foreach ($cats[0] as $key => $value) {
                if (isset($_GET[$key])) {
                    $newCats[$key] = $_GET[$key];
                }
            }

            if(isset($newCats)) {

//                global $dbConnection;
//                $title=$newCats['title'];
//
//                $sql = "INSERT INTO category(title) VALUES ('" . $title. "')";
//                $result=mysqli_query($dbConnection,$sql);
                $tools=new Tools();
                $cats= $tools->addCategory($newCats['title']);
                header("Refresh:0; url=admin_categories.php");
                var_dump($cats);
            }
            ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($cats as $key=>$value) {
                    echo '<tr>';
                    foreach ($value as $rowKey => $rowValue){
                        echo '<td>'. $rowValue . '</td>';
                    }
                    echo "<td>".'<a href="?delete=' . $cats[$key]['id'] . '"><button class="btn btn-danger">Delete</button></a>'.'</td>';
                    echo '</tr>';
                }
                if (isset($_GET['delete'])) {
                    $index=$_GET['delete'];
                   $tools=new Tools();
                    $tools->delete('category',$index);
                    header("Refresh:0; url=admin_categories.php");

                }
                ?>
                </tbody>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- build
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
-->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="JS/script.js"></script>
</body>
</html>


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
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"style="padding-right: 0px;padding-left: 0px;">
                <div class="menu" style="position: fixed;width: 200px;background-color:#f5f5f5;height: 100%;">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="http:/Exam/courses.php">Courses</a></li>
                        <li role="presentation"><a href="http:/Exam/students.php">Students</a></li>
                    </ul>
                </div>
        </div>
        <div class="col-sm-10">
            <h1 class="page-header" style="margin-top: 0px;">Course<a href="add.php"> <button class="btn btn-primary">+Add</button></a></h1>
            <?php
            define("ITEMS_PER_PAGE", 3);
            include 'read.php';
            if(isset($_GET["delete"])) {
                $id=$_GET["delete"];
                var_dump($id);
                $myfile = fopen("text.txt", "w") or die("hgcdmfhdcm");
                for ($i = 0; $i <count($students); ++$i) {
                    if ($i == $id) {
                        $line1 =$students[$i][0] . '|' . $students[$i][1] . '|' . $students[$i][2];
                    } else {
                        $line =$students[$i][0] . '|' . $students[$i][1] . '|' . $students[$i][2];
                    }
                    fwrite($myfile, $line);
                }
            }
            
            $currentPage = 1;
            if (isset($_GET['page'])) {
                $currentPage = $_GET['page'];
            }
            $totalPageCount = ceil(count($students) / ITEMS_PER_PAGE);
            $start = ($currentPage - 1) * ITEMS_PER_PAGE;
            $limit = ITEMS_PER_PAGE;
            if ($start + $limit > count($students)) {
                $limit = count($students) - $start;
            }
            ?>

            <table class="table table-bordered">
                <thead>
                <th>#</th>
                <th>tittle</th>
                <th>Lecturer</th>
                <th>Actions</th>
                </thead>
            <?PHP
                //var_dump($students);
            for ($i = $start; $i < $start+$limit; $i++) {
                echo '</tbody>';
                echo "<tr>";
                echo " <td>".$students[$i]["0"]."</td>";
                echo " <td>".$students[$i]["1"]."</td>";
                echo "<td>".$students[$i]["2"]."</td>";
                echo "<td>".'<a href="?delete=' . $i . '"><button class="btn btn-danger">Delete</button></a>'.'</td>';
                echo "</tr>";
            }
            echo '</tbody></table>';
            ?>
                <nav style="margin-left: 400px;">
                    <ul class="pagination">
                        <?php
                        for ($i = 1; $i <= $totalPageCount; $i++) {
                            $style = '';
                            if ($i == $currentPage) {
                                $style = "background-color: #b3ffe6;";
                            }
                            echo '<li><a href="http://localhost/Exam/courses.php?page=' . $i . '" style="' . $style . '">' . $i . '</a></li>';
                        }
                        ?>


                    </ul>
                </nav>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

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
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-lg-3">
           <a href="add.php"> <button style="background-color: lawngreen;">Add user</button></a><br>
            <a href="delete.php"> <button style="background-color: lightcoral;">Delete user</button></a>
        </div>
        <div class="col-lg-6">
            <?php
            define("ITEMS_PER_PAGE", 3);
            include ("read.php");
            $currentPage = 1;
            if (isset($_GET['page'])) {
                $currentPage = $_GET['page'];
            }

            $totalPageCount = ceil(count($users) / ITEMS_PER_PAGE);
            $start = ($currentPage - 1) * ITEMS_PER_PAGE;
            $limit = ITEMS_PER_PAGE;
            if ($start + $limit > count($users)) {
                $limit = count($users) - $start;
            }
            ?>

            <table class="table">
                <thead>
                <th>Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>National</th>
                </thead>

                <tbody>
                <?php
                for ($i = $start; $i < $start + $limit; $i++) {
                    echo "<tr>";
                    echo " <td>".$users[$i]["0"]."</td>";
                    echo " <td>".$users[$i]["1"]."</td>";
                    echo "<td>".$users[$i]["2"]."</td>";
                    echo "<td>".$users[$i]["3"]."</td>";
                    echo "<td>".$users[$i]["4"]."</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>

            <nav style="margin-left: 150px;">
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $totalPageCount; $i++) {
                        $style = '';
                        if ($i == $currentPage) {
                            $style = "background-color: #b3ffe6;";
                        }
                        echo '<li><a href="http://localhost/homework16/index.php?page=' . $i . '" style="' . $style . '">' . $i . '</a></li>';
                    }
                    ?>

                </ul>
            </nav>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

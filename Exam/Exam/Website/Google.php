<!DOCTYPE html>
<?php
require_once 'DbConnection.php';
require_once 'Navigation.php';
require_once 'Pagination.php';
$currentPage = 1;
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
}
$start = ($currentPage - 1) * Pagination::ITEMS_PER_PAGE;
$limit = Pagination::ITEMS_PER_PAGE;
$tools=new Tools();
$GoogleNews=$tools->getCatWithJoin('Google',$start,$limit);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="media" style="padding-top: 50px;">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="images/images.jpg"style="height: 100px;">
                    </a>
                </div>
                <div class="media-body">
                    <?php
                    foreach ($GoogleNews as $key=>$value) {
                        echo '<h4 class="media-heading" style="color: darkblue;">'.$value['news_title'].'</h4>'.PHP_EOL;
                        echo $value['news_content'].PHP_EOL;
                        echo $value['date'].PHP_EOL;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<nav style="margin-left: 550px;">
    <ul class="pagination">
        <?php
            $pagination=new Pagination();
            $pagination->CatsPages($currentPage,'Google',$start,$limit);
        ?>

    </ul>
</nav>
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
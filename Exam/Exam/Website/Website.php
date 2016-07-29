<!Doctype html>
    <style>
    img {
        height: 100px;
        width: 100px;
    }
</style>
        <?php
        require_once 'Navigation.php';
        require_once "Pagination.php";
        $currentPage=1;
        //define(ITEMS_PER_PAGE,2);

        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        }
        $pagination=new Pagination();
        $start = ($currentPage - 1) * Pagination::ITEMS_PER_PAGE;
        $limit =Pagination::ITEMS_PER_PAGE;
        $tools=new Tools();
        $news=$tools->getAllWithJoin($start,$limit);
        ?>
        <div class="media "style="padding-top: 50px;">
            <div class="media-left media-middle">
                <a href="#">
                <?php
                foreach ($news as $key=>$value) {
                    echo '<img class="media-object" src=" ' . $value['news_image'] . '">';
                    echo '<div class="border" style="height: 50px;"></div>';
                }
                ?>
                </a>
            </div>
            <div class="media-body">
                <?php
                foreach ($news as $key => $value){
                    echo '<h4 style="color: darkblue;">'.$value['news_title'].'</h4>';
                    echo $value['news_content'];
                    echo $value['date'];
                    echo '<div class="border" style="height: 50px;"></div>';
                }
            ?>
            </div>
        </div>
        <nav style="margin-left: 550px;">
            <ul class="pagination">
                <?php

                    $pagination=new Pagination();
                    $pagination->NewsPages($currentPage);
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

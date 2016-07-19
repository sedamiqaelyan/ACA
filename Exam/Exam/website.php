<!Doctype html>
                <?php
                require_once 'navigation.php';
                $sql="SELECT
                    `news`.`title` as news_title,
                    `news`.`content` as news_content,
                    `news`.`date` as date,
                    `category`.`title` as news_category
                    FROM
                    `news` INNER JOIN `category` ON `news`.categori_id=`category`.`id`";
                $result = mysqli_query($dbConnection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $news[] = $row;
                    }
                }
                ?>
                <div class="media "style="padding-top: 50px;">
                <div class="media-left media-middle">
                    <a href="#">
<!--                        <img class="media-object" src="images/.jpg" alt="...">-->
                    </a>
                </div>
                <div class="media-body">
                    <?php
                    foreach ($news as $key=>$value) {
                        echo '<h4 style="color: darkblue;">'.$value['news_title'].'</h4>'.PHP_EOL;
                        echo $value['news_content'].PHP_EOL;
                        echo $value['date'].PHP_EOL;
                    }
                    ?>
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
<?php
require_once 'database.php';
// Establish Connection to the Database
$per_page=1;
if (isset($_GET['page'])) {

    $page = $_GET['page'];

}

else {

    $page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
 $sql="SELECT  
            `news`.`title` as news_title,
            `news`.`content` as news_content,
            `news`.`date` as date,
            `category`.`title` as news_category,
            `news`.`news_image_name` as `news_image`
            FROM
            `news` INNER JOIN `category`  ON `news`.categori_id=`category`.`id` LIMIT $start_from, $per_page”;
$result = mysqli_query ($dbConnection, $sql);

?>
    <table align=”center” border=”2″ cellpadding=”3″>
        <tr><th>Name</th><th>Phone</th><th>Country</th></tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr align=”center”>
                <td><?php echo $row[‘news_title’]; ?></td>
                <td><?php echo $row[‘news_content’]; ?></td>
                <td><?php echo $row[‘date’]; ?></td>
            </tr>
            <?php
        };
        ?>
    </table>

    <div>
<?php

//Now select all from table
//$sql = “select * from student”;
//$result = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo “<center><a href=’pagination.php?page=1′>”.’First Page’.”</a> “;

for ($i=1; $i<=$total_pages; $i++) {

    echo “<a href=’pagination.php?page=”.$i.”‘>”.$i.”</a> “;
};
// Going to last page
echo “<a href=’pagination.php?page=$total_pages’>”.’Last Page’.”</a></center> “;
?>
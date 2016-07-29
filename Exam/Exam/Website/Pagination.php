<?php
require_once 'DbConnection.php';
class Pagination extends DbConnection
{
   const ITEMS_PER_PAGE=2;
        protected $totalPageCount;
        protected $currentPage=1;
        protected $title;

    /**
     * pagination constructor.
     * @param $currentPage
     */
    public function __construct()
    {
        parent:: __construct();

    }
    public function NewsPages($currentPage)
    {
        $statement=$this->connection->prepare("Select COUNT(*) as count from news");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        $totalPageCount = ceil($result[0]['count'] / self::ITEMS_PER_PAGE);
        for ($i = 1; $i <= $totalPageCount; $i++) {
            $style='';
            if ($i==$currentPage) {
                $style="background-color: #b3ffe6;";
            }
            echo '<li><a href="http://localhost/ACA/Exam/Exam/Website/Website.php?page=' . $i . '" style="'.$style.'" >' . $i . '</a></li>';
        }
    }
    public function CatsPages($currentPage,$CatName,$start,$limit)
    {
        $statement=$this->connection->prepare("SELECT count(*) as count,
`news`.`title` as news_title,
`news`.`content` as news_content,
`news`.`date` as date,
`category`.`title` as news_category
FROM
`news` INNER JOIN `category` ON `news`.categori_id=`category`.`id` WHERE `category`.`title`='".$CatName."' Limit $start,$limit");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        $totalPageCount = ceil($result[0]['count'] / self::ITEMS_PER_PAGE);
        for ($i = 1; $i <= $totalPageCount; $i++) {
            $style='';
            if ($i==$currentPage) {
                $style="background-color: #b3ffe6;";
            }
            echo '<li><a href="http://localhost/ACA/Exam/Exam/Website/'.$CatName.'.php?page=' . $i . '" style="'.$style.'" >' . $i . '</a></li>';
        }
    }

}
$pagination=new Pagination();
$pagination->CatsPages(1,'Sport',0,1);

?>

<?php
require_once 'DbConnection.php';
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/27/16
 * Time: 4:50 AM
 */
class Tools extends DbConnection
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll($table)
    {
        $statement = $this->connection->prepare("SELECT title FROM " . $table);
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();
        return $result;
    }
    public function getAllWithJoin($start,$limit)
    {
        $statement=$this->connection->prepare("SELECT  
            `news`.`title` as news_title,
            `news`.`content` as news_content,
            `news`.`date` as date,
            `category`.`title` as news_category,
            `news`.`news_image_name` as `news_image`
            FROM
            `news`  INNER JOIN `category`  ON `news`.categori_id=`category`.`id` limit $start,$limit");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();
        return $result;

    }
    public function getCatWithJoin($CatName,$start,$limit)
    {
        $statement=$this->connection->prepare("SELECT
            `news`.`title` as news_title,
            `news`.`content` as news_content,
            `news`.`date` as date,
            `category`.`title` as news_category
            FROM
            `news` INNER JOIN `category` ON `news`.categori_id=`category`.`id` WHERE `category`.`title`='".$CatName."' Limit $start,$limit");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();
        return $result;
    }

}
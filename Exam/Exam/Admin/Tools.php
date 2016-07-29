<?php
require_once "DbConnection.php";
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/29/16
 * Time: 12:53 PM
 */
class Tools extends DbConnection
{
    /**
     * Tools constructor.
     */
    public function __construct()
    {
        parent:: __construct();
    }
    public function getFromTable($table)
    {
        $statement=$this->connection->prepare("Select * from ".$table." ");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();
        return $result;

    }
    public function getNews()
    {
        $statement=$this->connection->prepare("SELECT
                    `news`.`id` as Id,
                    `news`.`title` as news_title,
                    `news`.`content` as news_content,
                    `news`.`date` as date,
                    `category`.`title` as news_category,
                    `news`.`news_image_name` as news_image
                    FROM
                    `news` INNER JOIN `category` ON `news`.categori_id=`category`.`id`");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();
        return $result;

    }
    public function addNewsWithImage($title,$content,$catId,$file_destination)
    {
        $statement=$this->connection->prepare("INSERT INTO news (title,content,categori_id,news_image_name) VALUES ('" . $title. "' , '" . $content. "' , '" . $catId . "' , '" . $file_destination."' )");
        $statement->execute();
    }
    public function addCategory($title)
    {
        $statement=$this->connection->prepare("Insert into category (title) VALUES (' ".$title."')");
        $statement->execute();
    }
    public function delete($table,$id)
    {
        $statement=$this->connection->prepare("Delete from ".$table." WHERE id=".$id." ");
        $statement->execute();
    }

}
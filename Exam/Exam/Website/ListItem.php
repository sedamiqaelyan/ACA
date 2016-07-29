<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/21/16
 * Time: 8:04 PM
 */
class ListItem
{
    private $content;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function draw()
    {
        echo '<li><a href="http://localhost/ACA/Exam/Exam/Website/'.$this->content.'.php">'.$this->content.'</li>';
    }
}
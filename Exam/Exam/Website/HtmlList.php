<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/21/16
 * Time: 7:33 PM
 */
class HtmlList
{
   // const UNORDERED_LIST='ul';

    private $ListItem;
   // private $type;

    /**
     * HtmlList constructor.
     * @param $ListItem
     */
    public function __construct()
    {
        $this->ListItem = [];
       // $this->type='ul';
    }
    public function addItem($item)
    {
        $this->ListItem[]=$item;
    }
    public function draw()
    {
        //echo '<'.$this->type.'>';
        echo '<ul class="nav navbar-nav navbar-right">';
        foreach ($this->ListItem as $ListItem)
        {
            $ListItem->draw();
        }
        echo '</ul>';
    }


}
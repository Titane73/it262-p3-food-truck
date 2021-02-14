<?php

class MenuItem {
    public $menu_id = '';
    public $item_img = "";
    public $name = '';
    public $price = 0;
    public $description = '';
    
    public $extras = array();

    public function __construct($menu_id, $item_img, $name, $price, $description)
    {
        $this->menu_id = $menu_id;
        $this->item_img = $item_img;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;

    }

    public function add_extra($extra){
        $this->extra[] = $extra;
    }

}
?>
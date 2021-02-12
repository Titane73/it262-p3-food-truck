<?php

class MenuItem {
    public $menu_id = '';
    public $name = '';
    public $price = 0;
    public $description = '';
    
    public $extras = array();

    public function __construct($menu_id, $name, $price, $description)
    {
        $this->menu_id = $menu_id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function add_extra($extra){
        $this->extra[] = $extra;
    }

}
?>
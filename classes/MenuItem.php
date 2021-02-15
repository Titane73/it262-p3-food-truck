<?php

// MenuItem.php

class MenuItem {
    public $menu_id = '';
    // public $item_img = ""; // Bookmark for possible images 
    public $name = '';
    public $price = 0;
    public $description = '';
    
    public $extras = array();

    public function __construct($menu_id, $name, $price, $description)
    {
        $this->menu_id = $menu_id;
        // $this->item_img = $item_img; // Bookmark for possible images
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;

    }

    //  Bookmark for possible Extras code
    // public function add_extra($extra){
    //     $this->extra[] = $extra;
    // }

}
?>
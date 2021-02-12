<?php

class MenuItem {
    public $name = '';
    public $price = 0;
    public $description = '';

    public function __construct($name, $price, $description)
    {

        $this->name = $name;
        $this->price = $price;
        $this->description = $description;

    }

}
?>
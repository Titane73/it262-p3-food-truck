<?php

class AddOns {
    public $name = '';
    public $price = 0;
    public $description = '';

    public function __contruct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        
    }

}

?>
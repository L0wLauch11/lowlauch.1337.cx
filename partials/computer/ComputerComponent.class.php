<?php

class ComputerComponent {
    public $name;
    public $brand;
    public $link;
    public $prefix;

    public function __construct($name, $brand, $link, $prefix = '') {
        $this->name = $name;
        $this->brand = $brand;
        $this->link = $link;
        $this->prefix = $prefix;
    }

    public function getName() {
        return $this->name;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getLink() {
        return $this->link;
    }

    public function getPrefix() {
        return $this->prefix;
    }
}
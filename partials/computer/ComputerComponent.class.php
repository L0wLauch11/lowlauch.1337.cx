<?php

class ComputerComponent {
    public string $name;
    public string $brand;
    public string $link;
    public string $prefix;

    public function __construct($name, $brand, $link, $prefix = '') {
        $this->name = $name;
        $this->brand = $brand;
        $this->link = $link;
        $this->prefix = $prefix;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getLink(): string {
        return $this->link;
    }

    public function getPrefix(): string {
        return $this->prefix;
    }
}
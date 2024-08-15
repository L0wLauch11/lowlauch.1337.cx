<?php

class NavigationSection {
    public $url;
    public $displayName;

    public function __construct($url, $displayName) {
        $this->url = $url;
        $this->displayName = $displayName;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function getUrl() {
        return $this->url;
    }
}
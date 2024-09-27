<?php

class NavigationSection {
    public string $url;
    public string $displayName;

    public function __construct($url, $displayName) {
        $this->url = $url;
        $this->displayName = $displayName;
    }

    public function getDisplayName(): string {
        return $this->displayName;
    }

    public function getUrl(): string {
        return $this->url;
    }
}
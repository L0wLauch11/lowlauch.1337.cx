<?php

class NavigationSection {
    public string $route;
    public string $path;
    public string $displayName;

    public function __construct($route, $path, $displayName) {
        $this->route = $route;
        $this->path = $path;
        $this->displayName = $displayName;
    }

    public function getDisplayName(): string {
        return $this->displayName;
    }

    public function getPath(): string {
        return $this->path;
    }

    public function getRoute(): string {
        return $this->route;
    }
}
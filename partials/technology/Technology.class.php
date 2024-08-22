<?php

class Technology {
    public $identifier;
    public $icon;
    public $displayName;
    public $link;
    public $category;
    private static $technologies = [];

    public function __construct($identifier, $displayName, $link, $category = '', $icon = 'automatic') {
        $this->identifier = $identifier;
        $this->icon = $icon;
        $this->displayName = $displayName;
        $this->link = $link;
        $this->category = $category;
    }

    public static function add($identifier, $displayName, $link,  $icon = 'automatic') {
        self::$technologies[$identifier] = 
            new Technology($identifier, $displayName, $link, $icon);
    }

    public static function render($identifier) {
        $technology = self::$technologies[$identifier];

        if ($technology->icon == 'automatic') {
            $technology->icon = faviconGet($technology->link);
        }

        return "
        <div class='technology'>
            <img src='{$technology->icon}'>
            <a href='{$technology->link}'>{$technology->displayName}</a> <span class='technology-category'>&mdash; ({$technology->category})</span>
        </div>
        ";
    }
}
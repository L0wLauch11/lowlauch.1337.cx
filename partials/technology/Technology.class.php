<?php

class Technology {
    private string $identifier;
    private string $icon;
    private string $displayName;
    private string $link;
    private string $category;
    private static array $technologies = [];

    public function __construct($identifier, $displayName, $link, $category = '', $icon = 'automatic') {
        $this->identifier = $identifier;
        $this->displayName = $displayName;
        $this->link = $link;
        $this->category = $category;
        $this->icon = ($icon == 'automatic') ? faviconGet($link) : $icon;
    }

    public static function add($identifier, $displayName, $link, $category, $icon = 'automatic'): void {
        self::$technologies[$identifier] = 
            new Technology($identifier, $displayName, $link, $category, $icon);
    }

    public static function render($identifier): string {
        $technology = self::$technologies[$identifier];

        return <<<HTML
            <div class="technology">
                <img src="{$technology->icon}">
                <a href="{$technology->link}">{$technology->displayName}</a> <span class="technology-category">&mdash; ({$technology->category})</span>
            </div>
        HTML;
    }
}
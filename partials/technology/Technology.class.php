<?php

class Technology {
    public string $identifier;
    public string $icon;
    public string $displayName;
    public string $link;
    public string $category;
    private static array $technologies = [];

    public function __construct($identifier, $displayName, $link, $category = '', $icon = 'automatic') {
        $this->identifier = $identifier;
        $this->icon = $icon;
        $this->displayName = $displayName;
        $this->link = $link;
        $this->category = $category;
    }

    public static function add($identifier, $displayName, $link, $category, $icon = 'automatic'): void {
        self::$technologies[$identifier] = 
            new Technology($identifier, $displayName, $link, $category, $icon);
    }

    public static function render($identifier): string {
        $technology = self::$technologies[$identifier];

        if ($technology->icon == 'automatic') {
            $technology->icon = faviconGet($technology->link);
        }

        return <<<HTML
            <div class="technology">
                <img src="{$technology->icon}">
                <a href="{$technology->link}">{$technology->displayName}</a> <span class="technology-category">&mdash; ({$technology->category})</span>
            </div>
        HTML;
    }
}
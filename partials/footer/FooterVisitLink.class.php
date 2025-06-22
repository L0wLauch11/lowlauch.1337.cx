<?php

class FooterVisitLink {
    public string $link;
    public string $title;
    public string $buttonColor;
    public function __construct($link, $title, $buttonColor = 'blue') {
        $this->link = $link;
        $this->title = $title;
        $this->buttonColor = $buttonColor;
    }

    public function render(): string {
        $icon = faviconGet($this->link);

        return <<<HTML
            <a style="color: {$this->buttonColor};" class="visit-link button-inline button-{$this->buttonColor}" href="{$this->link}" target="_blank">
                <img class="icon" src="{$icon}" alt="">
                <span>{$this->title}</span>
            </a>
        HTML;
    }
}
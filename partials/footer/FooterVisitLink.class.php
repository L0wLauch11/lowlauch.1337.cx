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
        return <<<HTML
            <a class="button button-inline button-{$this->buttonColor}" href="{$this->link}" target="_blank">
                Besuche {$this->title}!
            </a>
        HTML;
    }
}
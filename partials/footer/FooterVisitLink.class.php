<?php

class FooterVisitLink {
    public $link;
    public $title;
    public $buttonColor;
    public function __construct($link, $title, $buttonColor = 'blue') {
        $this->link = $link;
        $this->title = $title;
        $this->buttonColor = $buttonColor;
    }

    public function render() {
        return "<a class='button button-inline button-{$this->buttonColor}' href='{$this->link}' target='_blank'>Besuche {$this->title}!</a>";
    }
}
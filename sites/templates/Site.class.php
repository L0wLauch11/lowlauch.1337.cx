<?php
class Site {
    public string $name;
    public string $releaseDate;
    public string $footerContent;

    public function getName(): string {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getReleaseDate(): string {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate): void {
        $this->releaseDate = $releaseDate;
    }

    public function getFooterContent(): string {
        return $this->footerContent;
    }

    public function setFooterContent($footerContent): void {
        $this->footerContent = $footerContent;
    }
}

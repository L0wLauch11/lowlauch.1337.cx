<?php
class Site {
    public string $name;
    public ?string $releaseDate = null;
    public ?string $footerContent = null;

    public function getName(): string {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getReleaseDate(): ?string {
        return $this->releaseDate;
    }

    public function setReleaseDate(?string $releaseDate): void {
        $this->releaseDate = $releaseDate;
    }

    public function getFooterContent(): ?string {
        return $this->footerContent;
    }

    public function setFooterContent(?string $footerContent): void {
        $this->footerContent = $footerContent;
    }
}

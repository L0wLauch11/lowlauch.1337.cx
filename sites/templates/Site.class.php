<?php
class Site {
    public $name;
    public $screenshotsFolder;
    public $releaseDate;
    public $footerContent;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getScreenshotsFolder() {
        return $this->screenshotsFolder;
    }

    public function setScreenshotsFolder($screenshotsFolder) {
        $this->screenshotsFolder = $screenshotsFolder;
    }

    public function getReleaseDate() {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate) {
        $this->releaseDate = $releaseDate;
    }

    public function getFooterContent() {
        return $this->footerContent;
    }

    public function setFooterContent($footerContent) {
        $this->footerContent = $footerContent;
    }
}

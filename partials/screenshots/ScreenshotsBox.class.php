<?php

class ScreenshotsBox {
    public $screenshots;
    public $maxScreenshotsPerRow = 3;
    private $screenshotsList = [];
    private $screenshotsListRow = 0;
    private $screenshotsListIterator = 0;

    public function setScreenshots($screenshots) {
        $this->screenshots = $screenshots;
    }

    public function getScreenshots() {
        return $this->screenshots;
    }

    public function setMaxScreenshotsPerRow($maxScreenshotsPerRow) {
        $this->maxScreenshotsPerRow = $maxScreenshotsPerRow;
    }

    private function addScreenshotToList($screenshotPath) {
        if ($this->screenshotsListIterator >= $this->maxScreenshotsPerRow) {
            $this->screenshotsListRow++;
            $this->screenshotsListIterator = 0;
        }

        if (!isset($this->screenshotsList[$this->screenshotsListRow])) {
            $this->screenshotsList[$this->screenshotsListRow] = [];
        }

        array_push($this->screenshotsList[$this->screenshotsListRow], $screenshotPath);
        $this->screenshotsListIterator++;
    }

    private function generateScreenshotsTable() {
        $this->screenshotsList = [];

        foreach ($this->screenshots as $screenshotPath) {
            if (is_file($_SERVER['DOCUMENT_ROOT'].$screenshotPath)) {
                $this->addScreenshotToList($screenshotPath);
            } elseif (is_dir($_SERVER['DOCUMENT_ROOT'].$screenshotPath)) {
                foreach (scandir($_SERVER['DOCUMENT_ROOT'].$screenshotPath) as $screenshotInSubfolder) {
                    if ($screenshotInSubfolder == '.' || $screenshotInSubfolder == '..') {
                        continue;
                    }

                    $this->addScreenshotToList($screenshotPath.$screenshotInSubfolder);
                }
            }
        }

        return $this->screenshotsList;
    }

    public function render() {
        $desktopList = $this->generateScreenshotsTable();

        // Mobile list double the density
        $this->maxScreenshotsPerRow /= 2;
        $this->maxScreenshotsPerRow = ceil($this->maxScreenshotsPerRow);
        $mobileList = $this->generateScreenshotsTable();

        $output = renderPhp(__DIR__.'/screenshots.php', [
            'screenshots' => $desktopList,
            'screenshotsMobile' => $mobileList,
            'maxScreenshotsPerRow' => $this->maxScreenshotsPerRow
        ]);
        return $output;
    }
}
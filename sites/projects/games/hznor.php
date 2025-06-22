<?php
$site = new Site();
$site->setName('HZNOR');
$site->setReleaseDate('2022');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/hznor/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://lowlauch.itch.io/hznor', $site->getName(), 'red');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('ableton'); ?>

<h2>Beschreibung</h2>

<p>
    HZNOR <span class="brief">ist ein Puzzle-Spiel, wo man einen Panzer mit Blöcken im Level navigieren lässt.</span> Häufig wird man dabei in Fallen treten, welche man mit diesen Spielsteinen umgehen muss und so den Panzer ans Ziel bringen soll! Wie ich finde, ein gelungenes, kleines <?= faviconLink('https://itch.io/jam/wowie-jam-4', 'Game-Jam Spiel'); ?> (Thema= <strong>Collaborate With AI</strong>).
</p>

<h3>Wer hat sich diesen beschränkten Namen ausgedacht?</h3>
<br>
<p>
    <img src="/asset/img/projects/hznor/other/why-is-it-called-hznor.png" onclick="clickScreenshot(this)" class="screenshot">
    <span class="subtext">Discord Konversation zwischen mir und Paul während des Game-Jams.</span>
</p>


<h3>Verfügbarkeit</h3>
<p>
    Verfügbar für Windows und alle modernen Browser.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
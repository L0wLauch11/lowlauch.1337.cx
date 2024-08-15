<?php
$site = new Site();
$site->setName('Bor Aom');
$site->setReleaseDate('2023');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/bor-aom/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://lowlauch.itch.io/bor-aom', $site->getName() . ' auf itch.io', 'red');
$site->setFooterContent($visit->render());
?>

<h2>Beschreibung</h2>

<p>
    In Bor Aom spielt man einen Charakter, der Gegner töten muss um Items zu sammeln und somit stärker wird. Der Twist
    bei der Sache ist, dass man immer passiv Blut verliert, welches man zurückerlangen kann, indem man besagte Gegner
    besiegt.
</p>

<p>
    Bor Aom ist noch in Entwicklung, dennoch gibt es schon einige Items und ein paar Welten. Gerade gibt es ein paar
    balancing Schwierigkeiten, die ich bis zum Release aber auf jeden Fall noch beheben möchte.
</p>

<p>
    Zurzeit nur für Windows verfügbar.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
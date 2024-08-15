<?php
$site = new Site();
$site->setName('After Dark');
$site->setReleaseDate('2021');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/after-dark/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://lowlauch.itch.io/after-dark', $site->getName() . ' auf itch.io', 'red');
$site->setFooterContent($visit->render());
?>

<h2>Beschreibung</h2>

<p>
    „After Dark“ ist ein 2D Jump and Run. Immer wenn man stirbt, wird eine Lichtquelle auf der Todesposition in der
    Dunkelheit erschaffen und so muss man sich langsam mit seinem Charakter durch die Level vorantasten.
</p>

<p>
    Das zweite Spiel was je ich für einen Game-Jam gemacht habe. (Wir reden nicht über <a target="_blank" href="https://lowlauch.itch.io/lucky-diggah">Lucky diggah</a>). Musik mal wieder von meinem Freund Paul.
</p>

<p>
    Für Windows (und Browser!) verfügbar.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
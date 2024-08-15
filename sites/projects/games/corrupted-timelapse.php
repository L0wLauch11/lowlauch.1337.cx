<?php
$site = new Site();
$site->setName('Corrupted Timelapse');
$site->setReleaseDate('2019');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/corrupted-timelapse/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://lowlauch.itch.io/corruptedtimelapse', $site->getName() . ' auf itch.io', 'red');
$site->setFooterContent($visit->render());
?>

<h2>Beschreibung</h2>

<p>
    In diesem Spiel spielst du ein Quadrat, welches die Zeit verlangsamen kann, indem es stehen bleibt. Man muss
    versuchen
    diese Fähigkeit zu seinem Vorteil zu verwenden um die Gegner zu töten.
</p>

<p>
    Mein erstes Spiel was ich für einen Game-Jam entworfen habe. Außerdem ist „Corrupted Timelapse“ eines der ersten
    guten Spiele die ich gemacht habe. Insgesamt sind wir mit dem Spiel 9ter Platz von 51 Spielen geworden. Musik ist von
    meinem Freund Paul und mein Bruder hat einige Grafiken gemacht.
</p>

<p>
    Verfügbar auf Windows.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
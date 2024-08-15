<?php
$site = new Site();
$site->setName('HZNOR');
$site->setReleaseDate('2022');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/hznor/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://lowlauch.itch.io/hznor', $site->getName() . ' auf itch.io', 'red');
$site->setFooterContent($visit->render());
?>

<h2>Beschreibung</h2>

<p>
    In „HZNOR“ spielt man einen Panzer, welchen man mit Blöcken, die man in das Level platzieren kann, steuert. Die
    Level
    sind Puzzle-mäßig aufgebaut und man muss mit den Blöcken den Panzer weg von den Stacheln und somit ins Ziel lenken.
</p>

<p>
    Dieses Spiel habe ich wieder für einen Game-Jam entworfen. Der Zeitdruck scheint mir immer zu helfen, gute Spiele
    rauszubringen XD. Obwohl Paul das Spiel nicht cool fand. Trotzdem hat er wieder die Musik gemacht :).
</p>

<p>
    Verfügbar für Windows und alle modernen Browser.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
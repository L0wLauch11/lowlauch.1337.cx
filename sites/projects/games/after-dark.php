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

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('aseprite'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('opennbs'); ?>
<?= Technology::render('ableton'); ?>

<h2>Beschreibung</h2>

<p>
    After Dark <span class="brief">ist ein 2D Jump and Run, wo sterben zum Fortschritt nötig ist.</span> (Game-Jam Thema= <strong>FAILURE IS PROGRESS</strong>) Das wird dadurch erreicht, dass die Level komplett dunkel sind, bis man in einen der Stacheln fällt. In diesem Fall wird eine Lichtquelle am Punkt des Spielers erzeugt, wodurch man mehr sieht und sich immer weiter durch das Level vorantasten kann. Da dieses Spiel für einen <?= faviconLink('https://itch.io/jam/wowie-jam-3', 'Game-Jam'); ?> entworfen wurde, ist es recht kurz und hat nur 9 Level.
</p>

<h3>Musik</h3>
<p>
    Der Soundtrack in diesem Spiel ist von meinem Freund Paul gemacht worden.
</p>

<h3>Verfügbarkeit</h3>
<p>
    Für Windows und im Browser verfügbar.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
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

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('bosca'); ?>

<h2>Beschreibung</h2>

<p>
    Corrupted Timelapse <span class="brief">ist ein Highscore-Spiel, wo die Zeit langsamer wird, wenn man stehenbleibt.</span> Somit muss man taktisch dieses System verwenden, um die Gegner zu überlisten und gleichzeitig nicht getroffen zu werden. Inspiration wurde hier von <?= faviconLink('https://superhotgame.com/', 'Superhot'); ?> genommen (es ist wieder zu offensichtlich...).
</p>

<p>
    Corrupted Timelapse ist das erste Spiel, welches ich für einen Game-Jam entworfen habe. Insgesamt sind wir mit dem Spiel 9ter Platz von 51 Spielen geworden. Musik ist von
    meinem Freund Paul und mein Bruder hat einige Grafiken gemacht.
</p>

<h3>Musik</h3>
<p>Der Soundtrack wurde von meinem Freund Paul in Bosca Ceoil gemacht. Mittlerweile verwendet er Ableton Live.</p>

<h3>Grafiken</h3>
<p>Mein Bruder und Ich haben die Grafiken für dieses Spiel designed. Wie man sehen kann, haben wir uns mit den zahlreichen Effekten von Paint.NET gespielt.</p>

<p>
    Verfügbar auf Windows.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
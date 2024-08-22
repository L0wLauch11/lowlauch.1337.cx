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

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('aseprite'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('reaper'); ?>
<?= Technology::render('ableton'); ?>

<h2>Beschreibung</h2>

<p>
    Bor Aom <span class="brief">ist ein fast-paced Top-Down-Shooter, wo man dauerhaft Blut verliert.</span> Um das Blut aufrecht erhalten zu können muss man andauernd Gegner töten, welche einem das Blut zurückgeben. Wegen dieser Spieldesign Entscheidung ist man gezwungen immer schnell voranzutreiben. Weiters ist das Spiel mit über 25 Items und 5 Welten, inklusive Bosskämpfen ausgestattet.
</p>

<h3>Entstehungsgeschichte</h3>
<p>
    Nachdem ich ein großer Fan von <?= faviconLink('https://www.riskofrain.com/', 'Risk Of Rain 2'); ?> bin, habe ich mich von diesem Spiel inspirieren lassen (ist es offensichtlich?). Das Konzept des Items einsammelns, um stärker zu werden, ist zwar nichts neues, aber Risk of Rain 2 hat dies perfektioniert. Aufgrund dessen orientiert sich das Spiel an dieser Game-Mechanic, wobei es trotzdem versucht etwas neues auf den Tisch zu stellen.
</p>

<h3>Design-Schwierigkeiten</h3>
<p>
    Game Design ist nicht meine Stärke (sondern eher das Tastenhämmern), deshalb habe ich mir hier schwer getan beim Balancing der Items, Gegner & Bösse. Mit 25+ Items ist es schwierig, dass kein Item alle anderen stark überwältigt.
</p>

<h3>Musik</h3>
<p>
    Die Musik hat größtenteils ein Freund von mir namens Paul gemacht, welcher professionell Musik macht. Er verwendet Ableton Live.
    Ich verwende Reaper, da es eine gratis Evaluationslizenz hat und die Permanentlizenz ca. 70€ kostet, was echt leistbar ist. 
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
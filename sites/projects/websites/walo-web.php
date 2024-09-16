<?php
$site = new Site();
$site->setName('Walo-Web');
$site->setReleaseDate('2024');

$visit = new FooterVisitLink('https://mc-walo.xyz', 'mc-walo.xyz', 'aqua');
$site->setFooterContent($visit->render());

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/walo-web/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);
?>

<div id="screenshot-obstruction-box" onclick="unfocusAllScreenshots()"></div>

<h2>Verwendete Technologien</h2>
<?= Technology::render('php'); ?>
<?= Technology::render('css'); ?>
<?= Technology::render('mysql'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('github'); ?>

<h2>Beschreibung</h2>
<p>
    <span class="brief">Komplimentär zum <a href="?site=%2Fsites%2Fprojects%2Fgames%2Fwalo-mc.php">Minecraft-Walo-Plugin</a> gibt es auch die Walo-Website. Sie verbindet das Minecraft Plugin mit Datenbanken und Leaderboards. Außerdem bietet sie eine Dokumentation darüber an, wie man seinen eigenen Minecraft-Walo Spielmodus machen kann.</span>
</p>

<h2>Screenshot</h2>
<?= $screenshotsBox->render(); ?>
<span class="subtext">Walo-Website am 14.09.2024</span>
<?php
$site = new Site();
$site->setName('oh no!');
$site->setReleaseDate('2018');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/oh-no/']);
$screenshotsBox->setMaxScreenshotsPerRow(6); /* oh-no has phone screenshots */

$visit = new FooterVisitLink('https://apkpure.com/oh-no/me.lowlauch.ohno', 'oh no! (Inoffiziell)', 'lime');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('opennbs'); ?>

<h2>Beschreibung</h2>

<p>
    oh no! <span class="brief">ist ein Mobile-Game, wo man einen Kreis von links nach rechts schupft, um so den Stacheln auszuweichen.</span> Das Spiel ist komplett mit einem Shop mit verschiedenen Skins/Designs und Highscore-System.
</p>

<h3>Entstehungsgeschichte</h3>
<p>
    oh no! sollte ein kleines Nebenprojekt während meiner Schulzeit sein. Die erste Version des Spiels war deshalb nach rund 3 Tagen Entwicklung bereits fertig. Für so ein kleines Spiel war es relativ erfolgreich. Es muss nicht immer kompliziert sein, um gut zu sein. 500+ Downloads im Play-Store ist schon eine ordentliche Zahl.
</p>

<h3>Verfügbarkeit</h3>
<p>
    oh no! war verfügbar auf Android. Leider ist dieses Spiel jetzt ein Relikt der alten Zeit. Anfänglichs verlor ich nur meine Google Play-Schlüsseldatei (benötigt, um Updates für das Spiel hochzuladen). Später wurde auch mein Google Play Entwicklerkonto gekündigt, da ich mit den immer aktualisierten Richtlinien des Google Play Stores nicht mitgekommen bin. Google zog letztendlich den Stecker. Wenn man aber im Internet sucht, findet man sogenannte .apk-mirrors, welche das Spiel noch zum Download anbieten (wie zum Beispiel <?= faviconLink('https://apkpure.com/oh-no/me.lowlauch.ohno', 'hier'); ?>).
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
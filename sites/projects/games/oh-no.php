<?php
$site = new Site();
$site->setName('oh no!');
$site->setReleaseDate('2018');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/oh-no/']);
$screenshotsBox->setMaxScreenshotsPerRow(6); /* oh-no has phone screenshots */
?>

<h2>Beschreibung</h2>

<p>
    oh no! ist ein Spiel, welches ich 2018 erstellt habe. Das Spielprinzip ist eigentlich recht simpel. Man spielt einen Kreis und muss den Stacheln ausweichen. Weiters kann man Münzen einsammeln mit welchen man sich im Shop Designs kaufen kann.
</p>

<p>
    Die erste Version des Spiels war nach ~3 Tagen Entwicklung fertig. Für das war das Projekt eigentlich relativ erfolgreich. 500+ Downloads im Play-Store ist schon eine ordentliche Zahl.
</p>

<p>
    Nur verfügbar auf Android.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
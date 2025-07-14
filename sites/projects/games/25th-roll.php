<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$site = new Site();
$site->setName('25th Roll');
$site->setReleaseDate('2025');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/25th-roll/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = [];
$visit['gx.games'] = new FooterVisitLink('https://gx.games/games/g05pfa/25th-roll/', $site->getName(), 'aqua');
$visit['itch.io'] = new FooterVisitLink('https://lowlauch.itch.io/25th-roll', $site->getName(), 'red');
$site->setFooterContent($visit['gx.games']->render() . $visit['itch.io']->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('procreate'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('bitwig'); ?>

<h2>Beschreibung</h2>

<p>
    25th Roll <span class="brief">ist ein Strategiespiel, in dem du mit zufällig generierten Attacken einen Boss besiegen musst.</span> Dieses Spiel habe ich für den <?= faviconLink('https://gx.games/events/viral-glitch/', 'Viral Glitch Jam') ?> entwickelt. (Game-Jam Thema= <strong>Predictably Unpredictable</strong>) Durch die Würfel-Mechanic sollte dieses Thema noch ein bisschen besser getroffen werden. Das ist das erste Spiel dieser Art, welches ich jemals fertiggebracht habe. Strategiespiele sind für mich schwierig zu designen, deswegen bin ich umso stolzer auf dieses Spiel spezifisch!
</p>

<p>Der Game-Jam hat auch einige Preisgelder, also hoffe ich, dass ich einen Preis mitnehmen werde :)</p>

<h3>Grafiken</h3>
<p>
    Das Boss Sprite wurde von der Freundin meines Bruders entworfen.
</p>

<h3>Musik</h3>
<p>
    Der Soundtrack in diesem Spiel ist von meinem Bruder gemacht worden.
</p>

<h3>Verfügbarkeit</h3>
<p>
    Auf GX.games (Browser) und itch.io (Windows + Browser) verfügbar.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
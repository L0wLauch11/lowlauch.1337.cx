<?php
$site = new Site();
$site->setName('25th Roll');
$site->setReleaseDate('2025');

$screenshotsBox = new ScreenshotsBox();
$screenshotsBox->setScreenshots(['/asset/img/projects/25th-roll/']);
$screenshotsBox->setMaxScreenshotsPerRow(3);

$visit = new FooterVisitLink('https://gx.games/games/g05pfa/25th-roll/', '<b>' . $site->getName() . '</b> auf gx.games', 'aqua');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('gamemaker'); ?>
<?= Technology::render('paint.net'); ?>
<?= Technology::render('procreate'); ?>
<?= Technology::render('audacity'); ?>
<?= Technology::render('bitwig'); ?>

<h2>Beschreibung</h2>

<p>
    25th Roll <span class="brief">ist ein Strategiespiel, in dem du mit zufällig generierten Attacken einen Boss besiegen musst.</span> Dieses Spiel habe ich für den <?= faviconLink('https://gx.games/events/viral-glitch/', 'Viral Glitch Jam') ?> entwickelt. (Game-Jam Thema= <strong>Predictably Unpredictable</strong>) Durch die Würfel-Mechanic sollte dieses Thema noch ein bisschen besser getroffen werden.
</p>

<p>Der Game-Jam hat auch einige Preisgelder, also hoffe ich, dass ich einen Preis mitnehmen werde :)</p>

<h3>Art</h3>
<p>
    Das Boss Sprite wurde von der Freundin meines Bruders entworfen.
</p>

<h3>Musik</h3>
<p>
    Der Soundtrack in diesem Spiel ist von meinem Bruder gemacht worden.
</p>

<h3>Verfügbarkeit</h3>
<p>
    Einstweilen nur auf GX.games verfügbar. Später ist ein Windows + Web Release auf itch.io geplant.
</p>

<h2>Screenshots</h2>
<?= $screenshotsBox->render(); ?>
<?php
$site = new Site();
$site->setName('IPFS Free Archive');
$site->setReleaseDate('2022');

$visit = new FooterVisitLink('https://archive.lowlauch.1337.cx/', 'archive.lowlauch.1337.cx', 'aqua');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('php'); ?>
<?= Technology::render('css'); ?>
<?= Technology::render('mysql'); ?>
<?= Technology::render('github'); ?>

<h2>Beschreibung</h2>

<p>
    <a href="https://archive.lowlauch.1337.cx">https://archive.lowlauch.1337.cx</a> <span class="brief">ist ein Archiv, welches unlimitierten Speicherplatz hat, indem es sich die Dienste von</span> <?= faviconLink("https://nft.storage/", "nft.storage"); ?> zu nutze macht, welches im Hintergrund das <?= faviconLink("https://ipfs.tech/", "IPFS"); ?>-Dateisystem verwendet. Bei größeren Dateien (> ~200MB) gibt es Probleme, dabei sie abzurufen. Deshalb nur für kleinere Dateien geeignet.
</p>

<p>
    Seit Jänner 2024 nicht mehr nutzbar, da nft.storage ihre Richtlinien geändert haben. Gratis Speicherplatz war auch irgendwie zu schön um wahr zu sein...
</p>
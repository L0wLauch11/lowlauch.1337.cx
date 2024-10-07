<?php
$site = new Site();
$site->setName('Minecraft Walo');
$site->setReleaseDate('2020');

$visit = new FooterVisitLink('https://github.com/L0wLauch11/Walo', 'Walo auf Github', 'aqua');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('java'); ?>
<?= Technology::render('spigot'); ?>
<?= Technology::render('mysql'); ?>
<?= Technology::render('github'); ?>

<h2>Beschreibung</h2>
<p>
    Minecraft Walo <span class="brief">besteht aus einem Minecraft Plugin für einen Spigot/Paper Server und der dazugehörigen</span> <a href="/website/walo-web">Website</a>. In diesem Spielmodus bekämpft man sich gegenseitig im PVP-Kampf, bis das letzte Team bleibt. Es ist schon seit 2020 in Entwicklung, jedoch erst dieses Jahr ist die Website schön geworden und die letzten paar Bugs wurden beseitigt, Quality of Life Features wurden eingebaut, sodass man keine manuelle Wartung mehr am Minecraft Server vornehmen muss, und er sich automatisch von alten Spielständen reinigt und wieder von selbst neustartet. 
</p>
<p>
    Genaueres kann man auf der <?= faviconLink("https://mc-walo.xyz", "Website"); ?> nachlesen! (Der Artikel dazu <a href="/website/walo-web">hier</a>)
</p>
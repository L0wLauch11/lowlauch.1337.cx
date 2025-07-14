<?php
$site = new Site();
$site->setName('Gaming Backlog');
$site->setReleaseDate('2024');

$visit = new FooterVisitLink('https://backlog.epicgamer.org/', 'backlog.epicgamer.org', 'aqua');
$site->setFooterContent($visit->render());
?>

<h2>Verwendete Technologien</h2>
<?= Technology::render('laravel'); ?>
<?= Technology::render('php'); ?>
<?= Technology::render('css'); ?>
<?= Technology::render('mysql'); ?>
<?= Technology::render('github'); ?>

<h2>Beschreibung</h2>

<p>
    <a href="https://backlog.epicgamer.org/">https://backlog.epicgamer.org</a> <span class="brief">ist eine Website, die ähnlich wie MyAnimeList nur für Videospiele ist.</span> Diese Website war mein erster Versuch ein <?= faviconLink('https://de.wikipedia.org/wiki/Model_View_Controller', 'MVC'); ?> Framework, insbesondere <?= faviconLink('https://laravel.com/', 'Laravel'); ?> zu verwenden. Diese Website habe ich nie fertiggestellt, man kann aber ein Benutzerkonto anlegen und Spiele zu seiner Liste hinzufügen, ... alles was so zu einer simplen <?= faviconLink('https://de.wikipedia.org/wiki/CRUD', 'CRUD'); ?>-app gehört.
</p>

<p>Mittlerweile ist diese Projekt verwaist.</p>
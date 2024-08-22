<?php
$site = new Site();
$site->setName("Lowlauch");
$site->setReleaseDate('2024');
?>

<div id="screenshot-obstruction-box" onclick="unfocusAllScreenshots()"></div>

<h2>Verwendete Technologien</h2>
<?= Technology::render('php'); ?>
<?= Technology::render('css'); ?>
<?= Technology::render('github'); ?>

<h2>Beschreibung</h2>

<p>
    <span class="brief">Nach 2 früheren Versionen meiner Website, programmierte ich endlich diese.</span> Ich hoffe, das lowlauch.1337.cx den Test der Zeit bestehen wird und keinen kompletten rewrite nach einem Jahr verlangt.
</p>

<p>
    Jetzt wird es technisch, also wenn dich das nicht interessiert, brauchst du diese Seite nicht lesen.
</p>

<p>
    Diese Website wurde mit Vanilla <?= faviconLink('https://www.php.net/manual/de/intro-whatis.php', 'PHP'); ?> geschrieben. Desweiteren wird für Styles stinknormales <?= faviconLink('https://developer.mozilla.org/en-US/docs/Web/CSS', 'CSS'); ?> verwendet.
</p>

<h3>CSS...</h3>
<br><p>
    <img src="/asset/img/projects/lowlauch/mistakes-were-made.png" class="screenshot" onclick="clickScreenshot(this)">
    <span class="subtext">Fehler wurden gemacht...</span>

    <span>
        Nun ja... Was soll ich sagen? Um volle Kontrolle über sein Design zu bekommen, ist eben CSS der schnellste Weg. Dadurch passiert es aber schnell, das irgendwelche Hacks verwendet werden, um das Interface irgendwie aufrechtzuerhalten (vielleicht ist es auch mein mangelndes Können). Eventuell sollte ich mir einmal Bootstrap oder so etwas aneignen.
    </span>
</p>

<h3>Warum Vanilla PHP? Gibt es nicht schon etliche Frameworks, die Web-Entwicklung leichter machen?</h3>
<p>
    PHP (vor allem > Version 8.0) ist meiner Meinung nach die perfekte Programmiersprache für solch kleine Websites. Die Seite ist nicht allzu komplex, aber auch nicht extrem simple, wo vanilla HTML auch gereicht hätte. Ich mache mir die <strong>objektorientierten Features</strong> von PHP gut zunutze und kann so das meiste an schwierigem Code hinter Abstraktionen verstecken:
    
    <p></p><img src="/asset/img/projects/lowlauch/oop.png" class="screenshot" onclick="clickScreenshot(this)">
    <span class="subtext">Boilerplate darf bei OOP natürlich nicht fehlen...</span>

    <p>
        Ich habe auch überlegt HUGO anstatt PHP zu verwenden, aber dieser Static Site Generator hat mir nicht so gut gefallen wie PHP.
    </p>
</p>
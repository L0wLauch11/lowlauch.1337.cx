<?php
$site = new Site();
$site->setName('Webers Computer');
$site->setReleaseDate('2021');

$screenshotsBox = new ScreenshotsBox(); 
$screenshotsBox->setScreenshots(['/asset/img/computers/weber/'])
?>

<h2>Kurzbeschreibung</h2>
<p>
    <span class="brief">Ein ~<b>1500€</b> PC für 1080p Gaming. Wurde während der GPU-Krise gekauft.</span> (~50% teurer als nach der Krise, und das sogar gebraucht!) Ich habe diesen Computer gemeinsam mit ihm zusammengestellt und gebaut.
</p>

<h2>Komponente</h2>
<?= (new Computer(
    new ComputerComponent('NVIDIA RTX 3070', 'Gigabyte', 'https://www.techpowerup.com/gpu-specs/geforce-rtx-3070.c3674'),
    new ComputerComponent('Ryzen 5 5600X','AMD','https://www.techpowerup.com/cpu-specs/ryzen-5-5600x.c2365'),
    new ComputerComponent('Vengeance RGB PRO','Corsair','https://geizhals.at/corsair-vengeance-rgb-pro-sl-schwarz-dimm-kit-32gb-cmh32gx4m2e3200c16-a2460377.html', '32GB DDR4 3200MT/s'),
    new ComputerComponent('H500','NZXT','https://geizhals.at/nzxt-h500-schwarz-ca-h500b-b1-a1821592.html'),
    null, /* Can't remember */
    null, /* Can't remember */
    new ComputerComponent('ROG STRIX B550-F Gaming (WI-FI)','Asus','https://geizhals.at/asus-rog-strix-b550-f-gaming-wi-fi-a2295392.html'),
))->renderComputerComponents();
?>

<h2>Fotos</h2>
<?= $screenshotsBox->render(); ?>
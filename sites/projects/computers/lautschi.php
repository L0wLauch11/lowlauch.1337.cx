<?php
$site = new Site();
$site->setName('Lautschis Computer');
$site->setReleaseDate('2024');

$screenshotsBox = new ScreenshotsBox(); 
$screenshotsBox->setScreenshots(['/asset/img/computers/lautschi/'])
?>

<h2>Kurzbeschreibung</h2>
<p>
    <span class="brief">Ein ~<b>900€</b> PC für 1080p Gaming.</span> Ich habe diesen Computer gemeinsam mit ihm zusammengestellt und gebaut. Bei der CPU muss man beachten, dass sie nur Unterstützung für PCIE 4.0 x4 (!) hat. Bei Higher-End Grafikkarten kann/wird das zu Performance-Einbußen führen. Mit einer RTX 4060, jedoch, braucht man sich nicht allzu viele Sorgen machen. Im nachhinein wäre z. B. der <a href="https://geizhals.at/amd-ryzen-5-7500f-100-000000597-a2991857.html">AMD Ryzen 5 7500F</a> für ~40€ mehr die bessere Wahl gewesen. Naja; hätte, hätte, Fahrradkette.
</p>

<h2>Komponente</h2>
<?= (new Computer(
    new ComputerComponent('NVIDIA RTX 4060', 'Gigabyte', 'https://www.techpowerup.com/gpu-specs/geforce-rtx-4060.c4107'),
    new ComputerComponent('Ryzen 5 8500G','AMD','https://www.amd.com/en/products/processors/desktops/ryzen/8000-series/amd-ryzen-5-8500g.html'),
    new ComputerComponent('FURY Beast RGB','Kingston','https://geizhals.at/kingston-fury-beast-rgb-dimm-kit-16gb-kf556c36bbeak2-16-a2876818.html?hloc=at', '16GB DDR5 5600MT/s'),
    new ComputerComponent('H500','NZXT','https://geizhals.at/nzxt-h500-schwarz-ca-h500b-b1-a1821592.html'),
    new ComputerComponent('EXCERIA PLUS G2','KIOXIA','https://geizhals.at/kioxia-exceria-plus-g2-ssd-v76098.html'),
    new ComputerComponent('G12 GC 650W', 'Seasonic', 'https://geizhals.at/seasonic-g12-gc-650w-atx-g12-gc-650-a2522806.html?hloc=at'),
    new ComputerComponent('ROG STRIX B550-F Gaming (WI-FI)','Asus','https://geizhals.at/asus-rog-strix-b550-f-gaming-wi-fi-a2295392.html'),
))->renderComputerComponents();
?>

<h2>Fotos</h2>
<?= $screenshotsBox->render(); ?>
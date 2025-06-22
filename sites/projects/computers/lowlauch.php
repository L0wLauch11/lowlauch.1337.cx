<?php
$site = new Site();
$site->setName('Lowlauchs Computer');
$site->setReleaseDate('2022');

$screenshotsBox = new ScreenshotsBox(); 
$screenshotsBox->setScreenshots(['/asset/img/computers/lowlauch/'])
?>

<h2>Kurzbeschreibung</h2>
<p>
    Mein Computer :). <span class="brief">Ein ~<b>1600€</b> PC für 1080p Gaming. Mittlerweile habe ich auf 1440p geupgradet. Der PC wurde während der GPU-Krise gekauft, daher war die GPU überdimensioniert teuer (~50% teurer als nach der Knappheit).</span>
</p>

<h2>Komponente</h2>
<?= (new Computer(
    new ComputerComponent('AMD Radeon RX 6700 XT', 'XFX', 'https://www.techpowerup.com/gpu-specs/radeon-rx-6700-xt.c3695', 'Speedster SWFT 309'),
    new ComputerComponent('Core i5 12600KF', 'Intel', 'https://www.techpowerup.com/cpu-specs/core-i5-12600kf.c2510'),
    new ComputerComponent('Aegis', 'G.Skill', 'https://geizhals.at/g-skill-aegis-dimm-kit-16gb-f4-3200c16d-16gis-a2151626.html', '2x 16GB DDR4 3200MT/s'),
    new ComputerComponent('Pure Base 500', 'be quiet!', 'https://geizhals.at/be-quiet-pure-base-500-weiss-bg035-a2126910.html'),
    new ComputerComponent('970 EVO Plus 2TB', 'Samsung', 'https://geizhals.at/samsung-ssd-970-evo-plus-2tb-mz-v7s2t0bw-a1972736.html'),
    new ComputerComponent('Focus GX 750W', 'Seasonic', 'https://geizhals.at/seasonic-focus-gx-750w-atx-2-4-focus-gx-750-a2119986.html'),
    new ComputerComponent('PRO Z690-A DDR4', 'MSI', 'https://geizhals.at/msi-pro-z690-a-ddr4-a2625664.html'),
))->renderComputerComponents();
?>

<h2>Fotos</h2>
<?= $screenshotsBox->render(); ?>
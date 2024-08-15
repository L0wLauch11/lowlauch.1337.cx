<!DOCTYPE html>
<html lang="en">

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/setup.php'; ?>

<?php
if (isset($_GET['site'])) {
    $sitePath = $_GET['site'];
} else {
    $sitePath = "/404.php";
}

// We do not want the site content, only other properties found in 'Site.class.php'
ob_start();
include $_SERVER['DOCUMENT_ROOT'].$sitePath;
ob_end_clean();
?>

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/partials/metadata.php'; ?>
    <title><?= Globals::$title; ?> - <?= $site->getName(); ?></title>
</head>

<body>
    <header>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/partials/navigation/navigation.php'; ?>
    </header>

    <div class="container site-bar">
        <p>
            <span class="desktop-only">
                <?php
                $pathSplit = explode('/', $sitePath);
                foreach ($pathSplit as $pathPart) {
                    // We only want to show the folder path; instead of showing the php filename we show $site->getName();
                    if (str_contains($pathPart, '.php')) {
                        continue;
                    }

                    $pathPartCapitalized = ucfirst($pathPart);
                    echo "$pathPartCapitalized <span class='gray-text'>&#11106; </span>";
                }
                ?>
            </span>

            <strong><?= $site->getName(); ?></strong>
            <?php if ($site->getReleaseDate() != null): ?>
                (<?= $site->getReleaseDate(); ?>)
            <?php endif; ?>
        </p>
    </div>

    <div id="site-background"></div>
    <main>
        <div class="container site-content">
            <?= render_php($_SERVER['DOCUMENT_ROOT']."/$sitePath"); /* Now we render the site contents */?>
        </div>
    </main>

    <button class="button button-inline button-blue button-show-navigation container" onclick="toggleNavigation();">
        <img id="toggle-navigation-image" src="/asset/img/icons/chevron-left.png" alt="">
    </button>

    <div class="site-bar footer-bar container">
        <?= $site->getFooterContent(); ?>

        <p class="credits-text">
            <span class="desktop-only">
                <i>lowlauch, 2024</i> -> <a href="https://github.com/L0wLauch11/lowlauch.1337.cx" target="_blank">source code</a>
            </span>

            <span class="mobile-only">
                <a class="button button-icon button-inline button-aqua" href="https://github.com/L0wLauch11/lowlauch.1337.cx" target="_blank">
                    <img class="icon" src="/asset/img/icons/source.png" alt="">
                </a>
            </span>
        </p>
    </div>
</body>
</html>
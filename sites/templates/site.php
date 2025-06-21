<!DOCTYPE html>
<html lang="en">

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/setup.php'; ?>

<?php
if (!isset($sitePath)) {
    $sitePath = '404.php';
}

$sitePath = urldecode($sitePath);
$sitePathFull = "{$_SERVER['DOCUMENT_ROOT']}/sites/$siteFolder{$sitePath}.php";

if (Env::TESTING) {
    print $sitePathFull;
}

if (!file_exists($sitePathFull)) {
    $sitePath = '404.php';
    $sitePathFull = "{$_SERVER['DOCUMENT_ROOT']}/sites/$siteFolder{$sitePath}.php";
}

// We do not want the site content, only other properties found in 'Site.class.php'
ob_start();
include $sitePathFull;
ob_end_clean();
?>

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/partials/site-metadata.php'; ?>
    <title><?= Env::WEBSITE_TITLE; ?> - <?= $site->getName(); ?></title>
</head>

<body>
    <header>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/partials/navigation/navigation.php'; ?>
    </header>

    <div class="container site-bar">
        <p>
            <span class="desktop-only">
                <?php
                $siteFolderLastSlashRemoved = substr_replace($siteFolder, '', -1);
                $pathSplit = explode('/', $siteFolderLastSlashRemoved);
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
            
            <?= Env::TESTING ? " | $sitePath" : ''; ?>
        </p>
    </div>

    <div id="site-background"></div>
    <main>
        <div class="container site-content">
            <?= renderPhp($sitePathFull); /* Now we render the site contents */?>
        </div>
    </main>

    <button class="button button-inline button-blue button-show-navigation container" onclick="toggleNavigation();">
        <img class="desktop-only" id="toggle-navigation-image" src="/asset/img/icons/chevron-left.png" alt="">
        <img class="mobile-only" src="/asset/img/icons/hamburger-menu.png" alt="">
    </button>

    <div class="site-bar footer-bar container">
        <?= $site->getFooterContent(); ?>

        <p class="credits-text">
            <span class="desktop-only">
                <i>lowlauch, <?= date('Y') ?></i> -> <a href="https://github.com/L0wLauch11/lowlauch.1337.cx" target="_blank">source code</a>
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
<?php

ini_set('allow_url_fopen', '1');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once 'Globals.class.php';
include_once 'sites/templates/Site.class.php';
include_once 'partials/screenshots/ScreenshotsBox.class.php';
include_once 'partials/footer/FooterVisitLink.class.php';
include_once 'partials/technology/Technology.class.php';
include_once 'partials/technology/technologies.php';
include_once 'partials/favicon-link.php';

function renderPhp($pathToPhpFile, $passedVariables = []) {
    ob_start();
    foreach ($passedVariables as $key => $value) {
        ${$key} = $value;
    }

    include $pathToPhpFile;
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

function htmlRemoveTag($string, $tag) {
    return preg_replace("/\<$tag(.*)\>(.*)\<\/$tag\>/","", $string);
}

function faviconGet($faviconUrl) {
    $linkEncoded = urlencode($faviconUrl);

    // Eh, it works; PHP has issues with loading the file if its called '$linkEncoded'
    // and URLs typically have illegal characters (at least on Windows), which we will replace here.
    $faviconFilename = urlencode(
            str_replace('/', '', 
            str_replace(':', '', $faviconUrl)
        )
    );
    $iconPath = "/asset/img/icons/favicons/$faviconFilename.png";

    // Download icon first
    if (!file_exists($_SERVER['DOCUMENT_ROOT'].$iconPath)) {
        $faviconUrl = "http://www.google.com/s2/favicons?domain=$linkEncoded";
        file_put_contents($_SERVER['DOCUMENT_ROOT'].$iconPath, file_get_contents($faviconUrl));
    }

    return $iconPath;
}
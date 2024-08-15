<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once 'Globals.class.php';
include_once 'sites/templates/Site.class.php';
include_once 'partials/screenshots/ScreenshotsBox.class.php';
include_once 'partials/footer/FooterVisitLink.class.php';

function render_php($pathToPhpFile, $passedVariables = []) {
    ob_start();
    foreach ($passedVariables as $key => $value) {
        ${$key} = $value;
    }

    include $pathToPhpFile;
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

function html_remove_tag($string, $tag) {
    return preg_replace("/\<$tag(.*)\>(.*)\<\/$tag\>/","", $string);
}
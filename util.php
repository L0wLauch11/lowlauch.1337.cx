<?php

function renderPhp($pathToPhpFile, $passedVariables = []): string {
    ob_start();
    foreach ($passedVariables as $key => $value) {
        ${$key} = $value;
    }

    include $pathToPhpFile;
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

function faviconGet($faviconUrl): string {
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

function faviconLink($url, $name): string {
    $faviconSrc = faviconGet($url);

    return <<<HTML
        <a target='_blank' href='$url'>
            <img src='$faviconSrc'>
            $name
        </a>
    HTML;
}
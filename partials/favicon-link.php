<?php

function faviconLink($url, $name) {
    $faviconSrc = faviconGet($url);

    return <<<HTML
        <a target='_blank' href='$url'>
            <img src='$faviconSrc'>
            $name
        </a>
    HTML;
}
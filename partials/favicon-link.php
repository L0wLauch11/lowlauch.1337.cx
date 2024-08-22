<?php

function faviconLink($url, $name) {
    $faviconSrc = faviconGet($url);

    return "
    <a target='_blank' href='$url'>
        <img src='$faviconSrc'>
        $name
    </a>
    ";
}
<?php

require_once __DIR__.'/router.php';
include_once __DIR__.'/setup.php';

$siteRoutes = [
    '/$sitePath' => '', /* Wildcard sites */
    '/game/$sitePath' => 'projects/games/',
    '/website/$sitePath' => 'projects/websites/',
    '/computer/$sitePath' => 'projects/computers/',
];

foreach ($siteRoutes as $siteRoute => $siteRouteFolder) {
    get($siteRoute, function($sitePath) use ($siteRouteFolder) {
        $siteFolder = $siteRouteFolder;
        include_once 'sites/templates/site.php';
    });
}

get('/', function() {
    header('Location: /home');
});

any('/404',function() {
    header('Location: /site/404.php');
});
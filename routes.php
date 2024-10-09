<?php

require_once 'Router.class.php';
require_once 'setup.php';

$siteRoutes = [
    '/$sitePath' => '', /* Wildcard sites */
    '/game/$sitePath' => 'projects/games/',
    '/website/$sitePath' => 'projects/websites/',
    '/computer/$sitePath' => 'projects/computers/',
];

foreach ($siteRoutes as $siteRoute => $siteRouteFolder) {
    Router::get($siteRoute, function($sitePath) use ($siteRouteFolder) {
        $siteFolder = $siteRouteFolder;
        include_once 'sites/templates/site.php';
    });
}

Router::get('/', function() {
    header('Location: /home');
});

Router::any('/404',function() {
    header('Location: /site/404.php');
});
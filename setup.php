<?php

ini_set('allow_url_fopen', '1');

include_once 'Env.class.php';
include_once 'util.php';

include_once 'sites/templates/Site.class.php';
include_once 'partials/screenshots/ScreenshotsBox.class.php';
include_once 'partials/footer/FooterVisitLink.class.php';

include_once 'partials/technology/Technology.class.php';
include_once 'partials/technology/technologies.php';

include_once 'partials/computer/ComputerComponent.class.php';
include_once 'partials/computer/Computer.class.php';

if (Env::TESTING) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}
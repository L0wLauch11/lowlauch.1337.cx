<?php

ini_set('allow_url_fopen', '1');

require_once 'Env.class.php';
require_once 'util.php';

require_once 'sites/templates/Site.class.php';
require_once 'partials/screenshots/ScreenshotsBox.class.php';
require_once 'partials/footer/FooterVisitLink.class.php';

require_once 'partials/technology/Technology.class.php';
require_once 'partials/technology/technologies.php';

require_once 'partials/computer/ComputerComponent.class.php';
require_once 'partials/computer/Computer.class.php';

if (Env::TESTING) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}
<?php

require __DIR__ . './vendor/autoload.php';

use BulveyzRouter\Router;

require_once __DIR__ . './src/Routers/Router.php';

Router::routeVoid();

<?php
require __DIR__.'/bootstrap/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

var_dump($app->config->get('app.test'));

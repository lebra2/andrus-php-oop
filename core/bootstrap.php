<?php

$app = [];
$app['config'] = require_once('config.php');

$config = require_once('config.php');

require_once('core/Router.php');
require_once('core/Request.php');
require_once('core/database/connection.php');
require_once('core/database/queryBuilder.php');
require_once('core/Request.php');

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);


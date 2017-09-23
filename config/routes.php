<?php

require_once __DIR__.'/bootstrap.php';

$app->get('/','home.controller:indexAction')->bind('cadmiel');
$app->get('/home','home.controller:home');
$app->get('/home/test','home.controller:test');

$app->get('/contato','contato.controller:indexAction');
$app->get('/contato/test','contato.controller:test');


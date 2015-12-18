<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$loader = require __DIR__.'/../app/autoload.php';
require_once __DIR__.'/../app/MicroKernel.php';

$app = new MicroKernel('dev', true);
$app->loadClassCache();

$app->handle(Request::createFromGlobals())->send();
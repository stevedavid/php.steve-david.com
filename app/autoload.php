<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add(null, __DIR__.'/../src');
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

require_once('/app/vendor/simplesamlphp/simplesamlphp/www/_include.php');

$loader = require '/app/vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$kernel = new AppKernel('prod', true);
$kernel->boot();
$container = $kernel->getContainer();
$sspgetter = $container->get('appbundle.sspgetter');
$config = $sspgetter->getAuthsources($_SERVER['HTTP_HOST']);

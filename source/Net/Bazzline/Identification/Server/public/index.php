<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */
require_once __DIR__ . '/../../../../../../vendor/autoload.php';

use Luracast\Restler\Restler;
//use Luracast\Restler\Format\JsonFormat;
//use Luracast\Restler\Format\XmlFormat;
use Luracast\Restler\Defaults;

//set the defaults to match your requirements
Defaults::$throttle = 20; //time in milliseconds for bandwidth throttling
Defaults::$useUrlBasedVersioning = true;

//setup restler
$restler = new Restler();
//production mode
//$restler = new Restler(true);

$restler->setAPIVersion(1);
$restler->addAPIClass('Net\Bazzline\Identification\Server\Identify'); // repeat for more
//$restler->addAPIClass('Resources'); //from restler framework for API Explorer
$restler->addFilterClass('RateLimit'); //Add Filters as needed
//$restler->setSupportedFormats('JsonFormat', 'XmlFormat');
$restler->handle(); //serve the response
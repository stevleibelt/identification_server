<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */
require_once __DIR__ . '../../../../../../vendor/restler.php';

use Luracast\Restler\Restler;
use Luracast\Restler\Defaults;

//set the defaults to match your requirements
Defaults::$throttle = 20; //time in milliseconds for bandwidth throttling

//setup restler
$restler = new Restler();
//production mode
//$restler = new Restler(true);

$restler->addAPIClass('YourApiClassNameHere'); // repeat for more
$restler->addAPIClass('Resources'); //from restler framework for API Explorer
$restler->addFilterClass('RateLimit'); //Add Filters as needed
$restler->handle(); //serve the response
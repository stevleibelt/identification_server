<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */
require_once '../vendor/autoload.php';
require_once '../IdentifyController.php';

use Luracast\Restler\Restler;

$server = new Restler();

$server->addAPIClass('IdentifyController', '/');

$server->handle();

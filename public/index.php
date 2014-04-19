<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */
require_once '../vendor/autoload.php';

use Luracast\Restler\Restler;

$server = new Restler();

$server->addAPIClass('Controller\IdentifyController', '/');

$server->handle();

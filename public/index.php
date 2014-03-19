<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */
require_once '../vendor/autoload.php';

use Jacwright\RestServer\RestServer;

$mode = 'debug';
$server = new RestServer($mode);

$server->addClass('TestController');

$server->handle();
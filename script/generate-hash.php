#!/bin/php
<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

$isNotCalledFromCommandLineInterface = (PHP_SAPI !== 'cli');

if ($isNotCalledFromCommandLineInterface) {
    echo 'This script works only from cli' . PHP_EOL;
    exit(1);
}

$hasValidNumberOfArguments = (in_array($argc, array(2, 3)));
$argumentsAreValid = ($hasValidNumberOfArguments
    && (strlen(trim($argv[1])) > 0));

if (!$argumentsAreValid) {
    $usageMessage = 'No or invalid arguments supplied.' . PHP_EOL .
        'Usage: ' . basename(__FILE__) . ' <string> [<salt>]';

    echo $usageMessage . PHP_EOL;
    exit(1);
}

require_once __DIR__ . '/../vendor/autoload.php';

$salt = (isset($argv[2])) ? $argv[2] : '';
$string = $argv[1];

$hasher = new \Model\Hasher($salt);

echo $hasher->hash($string) . PHP_EOL;

<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Controller;

use Database\FileDatabase;
use Database\Query;

abstract class ControllerAbstract
{
    /**
     * @type \Application\Database\DatabaseInterface
     */
    protected $database;

    public function __construct()
    {
        $pathToDatabase = realpath(__DIR__ . '/../../../configuration/database.php');

        if (is_readable($pathToDatabase)) {
            $data = require_once $pathToDatabase;
        } else {
            $data = array();
        }

        $this->database = new FileDatabase($data);
    }

    protected function getDatabaseQuery()
    {
        return new Query();
    }
}

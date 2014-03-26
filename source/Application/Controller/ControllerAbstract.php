<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Application\Controller;

use Application\Database\FileDatabase;

abstract class ControllerAbstract
{
    /**
     * @type \Application\Database\DatabaseInterface
     */
    protected $database;

    public function __construct()
    {
        $pathToDatabase = '../../../configuration/database.php';

        if (is_readable($pathToDatabase)) {
            $data = require_once $pathToDatabase;
        } else {
            $data = array();
        }

        $this->database = new FileDatabase($data);
    }
}

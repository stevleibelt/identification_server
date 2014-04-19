<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-19 
 */

namespace Service\Factory;

use Database\FileDatabase;

/**
 * Class FileDatabaseFactory
 * @package Service\Factory
 */
class FileDatabaseFactory implements FactoryInterface
{
    /**
     * @return \Database\DatabaseInterface
     */
    public function create()
    {
        $pathToDatabase = realpath(__DIR__ . '/../../../configuration/database.php');

        if (is_readable($pathToDatabase)) {
            $data = require_once $pathToDatabase;
        } else {
            $data = array();
        }

        return new FileDatabase($data);
    }
}
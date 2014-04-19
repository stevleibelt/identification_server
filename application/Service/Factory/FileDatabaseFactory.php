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
        $pathToDatabase = realpath(__DIR__ . '/../../../data/dynamic/database.php');
        $data = (is_readable($pathToDatabase)) ? require_once $pathToDatabase : array();
        $hasherFactory = new HasherFactory();

        $database = new FileDatabase($data);
        $database->setHasher($hasherFactory->create());

        return $database;
    }
}
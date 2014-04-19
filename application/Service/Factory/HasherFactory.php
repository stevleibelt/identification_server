<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

namespace Service\Factory;

use Model\Hasher;

/**
 * Class HasherFactory
 * @package Service\Factory
 */
class HasherFactory implements FactoryInterface
{
    /**
     * @return \Model\Hasher
     */
    public function create()
    {
        $pathToSalt = realpath(__DIR__ . '/../../../data/dynamic/salt.php');
        $salt = (is_readable($pathToSalt)) ? require_once $pathToSalt : 'demo';

        return new Hasher($salt);
    }
}
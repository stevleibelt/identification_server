<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

namespace Service\Factory;

use Model\Identity;

/**
 * Class IdentityFactory
 * @package Service\Factory
 */
class IdentityFactory implements FactoryInterface
{
    /**
     * @return Identity
     */
    public function create()
    {
        return new Identity();
    }
}
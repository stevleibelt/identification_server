<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Database;

use Model\Hasher;
use Service\Factory\IdentityFactory;

/**
 * Interface DatabaseInterface
 * @package Database
 */
interface DatabaseInterface
{
    /**
     * @param Query $query
     * @return bool
     */
    public function isValid(Query $query);

    /**
     * @param Hasher $hasher
     */
    public function setHasher(Hasher $hasher);

    /**
     * @param IdentityFactory $factory
     */
    public function setIdentityFactory(IdentityFactory $factory);
}

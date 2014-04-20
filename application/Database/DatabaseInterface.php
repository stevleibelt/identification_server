<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Database;

use Model\Hasher;
use Model\Identity;
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

    /**
     * @todo remove ByName and replace name with query
     * @param string $name
     * @return null|Identity
     */
    public function getIdentityByName($name);
}

<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-19 
 */

namespace Database;

use Model\Hasher;
use Model\Identity;
use Service\Factory\IdentityFactory;

/**
 * Class AbstractDatabase
 * @package Database
 */
abstract class AbstractDatabase implements DatabaseInterface
{
    /** @var Hasher */
    protected $hasher;

    /** @var IdentityFactory */
    protected $identityFactory;

    /**
     * @param Query $query
     * @return bool
     */
    public function isValid(Query $query)
    {
        $isValid = false;

        if ($this->isValidQuery($query)) {
            $identity = $this->getIdentityByName($query->getName());

            if ($identity instanceof Identity) {
                $isValid = ($query->getPassword() === $identity->getPassword());
            }
        }

        return $isValid;
    }

    /**
     * @param Hasher $hasher
     */
    public function setHasher(Hasher $hasher)
    {
        $this->hasher = $hasher;
    }

    /**
     * @param IdentityFactory $factory
     */
    public function setIdentityFactory(IdentityFactory $factory)
    {
        $this->identityFactory = $factory;
    }

    /**
     * @param Query $query
     * @return bool
     */
    protected function isValidQuery(Query $query)
    {
        return ($query->hasName() && $query->hasPassword());
    }
} 
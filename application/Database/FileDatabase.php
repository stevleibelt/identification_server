<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Database;

use Model\Identity;

/**
 * Class FileDatabase
 * @package Database
 */
class FileDatabase extends AbstractDatabase
{
    /** @var array */
    private $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $name
     * @return null|Identity
     */
    public function getIdentityByName($name)
    {
        $identity = null;

        if (isset($this->data[trim($name)])) {
            $identity = $this->identityFactory->create();
            $identity->setName($name);
            $identity->setPassword($this->data[trim($name)]);
        }

        return $identity;
    }
}

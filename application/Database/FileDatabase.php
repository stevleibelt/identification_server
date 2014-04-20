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
        $key = trim($name);

        if (isset($this->data[$key])) {
            $identity = $this->identityFactory->create();
            $identity->setName($key);
            $identity->setPassword($this->data[$key]['password']);
            $identity->setValidUntil($this->data[$key]['valid_until']);
        }

        return $identity;
    }
}

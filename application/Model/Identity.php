<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

namespace Model;

/**
 * Class Identity
 * @package Model
 */
class Identity
{
    /** @var string */
    private $name;

    /** @var string */
    private $password;

    /** @var int */
    private $validUntil;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = trim((string) $name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = trim((string) $password);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param int $validUntil
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = (int) $validUntil;
    }

    /**
     * @return int
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }
}
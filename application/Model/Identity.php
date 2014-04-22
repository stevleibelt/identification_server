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
class Identity implements ArrayAbleInterface
{
    /** @var int|string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $hashedPassword;

    /** @var int */
    private $validUntil;

    /**
     * @return bool
     */
    public function hasId()
    {
        return (!is_null($this->id));
    }

    /**
     * @param int|string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

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
    public function setHashedPassword($password)
    {
        $this->hashedPassword = trim((string) $password);
    }

    /**
     * @return string
     */
    public function getHashedPassword()
    {
        return $this->hashedPassword;
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

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'name'          => $this->name,
            'validUntil'    => $this->validUntil
        );
    }
}
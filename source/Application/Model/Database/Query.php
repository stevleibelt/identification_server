<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Application\Model\Database;

class Query
{
    private $name;

    private $password;

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function hasName()
    {
        return (!is_null($this->name));
    }

    public function hasPassword()
    {
        return (!is_null($this->password));
    }

    public function setName($value)
    {
        $this->name = (string) $value;
    }

    public function setPassword($value)
    {
        $this->password = (string) $value;
    }
}

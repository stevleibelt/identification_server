<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Application\Database;

class FileDatabase implements DatabaseInterface
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function get(Query $query)
    {
        if ($query->hasName()
            && $query->hasPassword()) {
            return ((isset($this->data[$query->getName()]))
                && ($this->data[$query->getName()] === $query->getPassword()));
        } else {
            return false;
        }
    }
}

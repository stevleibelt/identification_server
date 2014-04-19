<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Database;

/**
 * Class FileDatabase
 * @package Database
 */
class FileDatabase implements DatabaseInterface
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param Query $query
     * @return bool
     */
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

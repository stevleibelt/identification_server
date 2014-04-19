<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Database;

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
    public function get(Query $query);
}

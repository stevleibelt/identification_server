<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Application\Model\Database;

interface DatabaseInterface
{
    public function get(Query $query);
}

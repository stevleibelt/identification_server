<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */

use Luracast\Restler\RestException;

/**
 * Class Identify
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22
 */
class Identify
{
    /**
     * @param string $name
     * @param string $password
     * @return bool
     * @throws RestException
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2014-02-22
     */
    public function user($name, $password)
    {
        if (strlen($name) < 1) {
            throw new RestException(400);
        }
        if (strlen($password) < 1) {
            throw new RestException(400);
        }

        return 'name: ' . $name . PHP_EOL . 'password: ' . $password;
    }
} 
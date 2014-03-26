<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */

 namespace Application\Controller;

/**
 * Class IdentifyController
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22
 */
class IdentifyController
{
    /**
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2014-02-22
     */
    public function get($name = '', $password = '')
    {
        //@todo validation, escaping
        /*
        if (strlen($name) < 1) {
            throw new RestException(400);
        }
        if (strlen($password) < 1) {
            throw new RestException(400);
        }
        */

        return array('name' => $name, 'password' => $password);
    }
} 

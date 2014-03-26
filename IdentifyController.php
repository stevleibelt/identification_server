<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */

/**
 * Class IdentifyController
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22
 */
class IdentifyController
{
    /**
     * @url GET /
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2014-02-22
     */
    public function user()
    {
        //@todo validation, escaping
        $name = (string) $_GET['name'];
        $password = (string) $_GET['password'];
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

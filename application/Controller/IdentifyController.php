<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-02-22 
 */

namespace Controller;

/**
 * Class IdentifyController
 * @package Controller
 */
class IdentifyController extends ControllerAbstract
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
        $query = $this->getDatabaseQuery();
        $query->setName($name);
        $query->setPassword($password);

        $isValid = $this->database->get($query);

        return array('statuscode' => 0, 'statusmessage' => 'ok', 'payload' => array('isValid' => $isValid));
    }
} 

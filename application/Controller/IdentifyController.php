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
class IdentifyController extends AbstractController
{
    /**
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2014-02-22
     */
    public function get($name = '', $password = '')
    {
        if ($this->isValidString($name)
            && ($this->isValidString($password))) {
            $query = $this->getDatabaseQuery();
            $query->setName($name);
            $query->setPassword($password);

            $isValid = $this->getDatabase()->isValid($query);
            $response = $this->getResponse(array('isValid' => $isValid))->toArray();
        } else {
            $response = $this->getErrorResponse(array('no or invalid arguments provided' => 'Usage: identify?name=<name>&password=<password>'))->toArray();
        }

        return $response;
    }
} 

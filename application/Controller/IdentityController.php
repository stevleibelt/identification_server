<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

namespace Controller;

use Model\Identity;
use Exception;
use InvalidArgumentException;
use Model\Response;

/**
 * Class IdentityController
 * @package Controller
 */
class IdentityController extends AbstractController
{
    /*
    public function index()
    {
        //@todo move identify get into index
        return $this->getResponse(array('you have to provide a valid name and password combination'))->toArray();
    }
    */
    /**
     * @param string $name
     * @param string $password
     * @return array|null
     */
    public function get($name, $password)
    {
        $response = null;

        try {
            if ($this->isValidString($name)
                && ($this->isValidString($password))) {
                $query = $this->getDatabaseQuery();
                $query->setName($name);
                $query->setPassword($password);

                if ($this->getDatabase()->isValid($query)) {
                    $identity = $this->getDatabase()->getIdentityByName($name);
                    if ($identity instanceof Identity) {
                        $response = $this->getResponse(
                            array(
                                'name' => $identity->getName(),
                                'password' => $identity->getPassword(),
                                'validUntil' => $identity->getValidUntil()
                            )
                        )->toArray();
                    }
                }
            }
            if (!$response instanceof Response) {
                throw new InvalidArgumentException('invalid name or password provided');
            }
        } catch (Exception $exception) {
            //@todo implement logging if needed
            $response = $this->getErrorResponse(array($exception->getMessage()))->toArray();
        }

        return $response;
    }

    public function put($name, $password, $validUntil)
    {

    }

    public function post($name, $password, $validUntil)
    {

    }

    public function delete($name, $password)
    {

    }
} 
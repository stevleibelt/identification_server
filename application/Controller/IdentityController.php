<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-20 
 */

namespace Controller;

use Model\Identity;
use Exception;
use InvalidArgumentException;
use Luracast\Restler\RestException;

/**
 * Class IdentityController
 * @package Controller
 */
class IdentityController extends AbstractController
{
    public function index()
    {
        //@todo move identify get into index
        return $this->getResponse(array('you have to provide a valid name and password combination'))->toArray();
    }

    /**
     * @param string $name
     * @param string $password
     * @return array
     * @throws \Luracast\Restler\RestException
     */
    public function get($name = '', $password = '')
    {
        $response = null;

        try {
            $this->validateString($name);
            $this->validateString($password);

            $query = $this->getDatabaseQuery();
            $query->setName($name);
            $query->setPassword($password);

            $database = $this->getDatabase();
            $database->validateAuthorization($query);
            $identity = $database->getIdentity($query);
            if ($identity instanceof Identity) {
                $response = $this->getResponse($identity->toArray());
            }
        } catch (\InvalidArgumentException $exception) {
            throw new RestException(401, 'no or invalid arguments provided');
        } catch (\Exception $exception) {
            throw new RestException(500, 'something unexpected happened');
        }

        return $response->toArray();
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
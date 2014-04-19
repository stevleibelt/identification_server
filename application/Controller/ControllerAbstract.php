<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Controller;

use Model\Payload;
use Model\Response;
use Model\Status;
use Database\FileDatabase;
use Database\Query;

/**
 * Class ControllerAbstract
 * @package Controller
 */
abstract class ControllerAbstract
{
    /**
     * @type \Database\DatabaseInterface
     */
    protected $database;

    public function __construct()
    {
        $pathToDatabase = realpath(__DIR__ . '/../../../configuration/database.php');

        if (is_readable($pathToDatabase)) {
            $data = require_once $pathToDatabase;
        } else {
            $data = array();
        }

        $this->database = new FileDatabase($data);
    }

    /**
     * @return Query
     */
    protected function getDatabaseQuery()
    {
        return new Query();
    }

    /**
     * @param int $statusCode
     * @param string $statusMessage
     * @param array $payloadContent
     * @return Response
     */
    protected function getResponse($statusCode, $statusMessage, array $payloadContent)
    {
        $payload = new Payload();
        $response = new Response();
        $status = new Status();

        $payload->setContent($payloadContent);

        $status->setCode($statusCode);
        $status->setMessage($statusMessage);

        $response->setPayload($payload);
        $response->setStatus($status);

        return $response;
    }
}

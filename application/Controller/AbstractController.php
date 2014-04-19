<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-03-26
 */

namespace Controller;

use Model\Payload;
use Model\Response;
use Model\Status;
use Database\DatabaseInterface;
use Database\Query;
use Service\Factory\FileDatabaseFactory;

/**
 * Acts as application
 * Class AbstractController
 * @package Controller
 */
abstract class AbstractController
{
    /** @var DatabaseInterface */
    private $database;

    /**
     * @return DatabaseInterface
     */
    protected function getDatabase()
    {
        if (!$this->database instanceof DatabaseInterface) {
            $factory = new FileDatabaseFactory();
            $this->database = $factory->create();
        }

        return $this->database;
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

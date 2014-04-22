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
     * @param array $payloadContent
     * @param int $statusCode
     * @param string $statusMessage
     * @return Response
     */
    protected function getResponse(array $payloadContent, $statusCode = 0, $statusMessage = 'ok')
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

    /**
     * @param $string
     * @throws \InvalidArgumentException
     */
    protected function validateString($string)
    {
        if(($string !== (string) $string)
            || (strlen($string) === 0)) {
            throw new \InvalidArgumentException('"' . $string . '" is not valid string given');
        }
    }
}

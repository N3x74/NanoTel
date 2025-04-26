<?php

namespace NanoTel\Request;

use Psr\Http\Message\ResponseInterface;

class Response
{
    private int $statusCode;
    private object $data;

    public function __construct(ResponseInterface $response)
    {
        $this->statusCode = $response->getStatusCode();
        $bodyContent = $response->getBody()->getContents();
        $decodedData = json_decode($bodyContent);

        $this->data = (object) $decodedData;
    }

    public function result(): object
    {
        return clone $this->data->result;
    }

    public function statusCode(): int
    {
        return $this->statusCode;
    }
}

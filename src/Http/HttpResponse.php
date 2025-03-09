<?php

namespace NanoTel\Http;

use Psr\Http\Message\ResponseInterface;
use NanoTel\Exceptions\HttpClient\EmptyResponse;
use NanoTel\Exceptions\Telegram\InvalidParameter;
use NanoTel\Exceptions\Telegram\RequestError;

final class HttpResponse
{
    private int $statusCode;
    private object $data;

    public function __construct(ResponseInterface $response)
    {
        $this->statusCode = $response->getStatusCode();
        $bodyContent = $response->getBody()->getContents();
        $decodedData = json_decode($bodyContent);

        if (empty($decodedData)) {
            throw new EmptyResponse("No response received from the server.");
        }

        $this->data = (object) $decodedData;
        $this->handleErrors();
    }

    private function handleErrors(): void
    {
        if ($this->statusCode === 400) {
            throw new InvalidParameter("Invalid value provided: " . ($this->data->description ?? "Unknown error"));
        }

        if ($this->statusCode !== 200) {
            throw new RequestError("Request failed: " . ($this->data->description ?? "Unknown error") . " -> Code: {$this->statusCode}");
        }
    }

    public function result(): object
    {
        return clone $this->data;
    }
}

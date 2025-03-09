<?php

namespace NanoTel\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use NanoTel\Exceptions\Telegram\RequestError;
use NanoTel\Http\HttpResponse;

class HttpClient
{
    private ?GuzzleClient $client;

    public function __construct(string $baseUri, int $timeOut = 10, int $connectTimeOut = 5)
    {
        $this->client = new GuzzleClient([
            'base_uri'        => rtrim($baseUri, '/') . '/',
            'timeout'         => $timeOut,
            'connect_timeout' => $connectTimeOut,
            'http_errors'     => false,
        ]);
    }

    public function request(string $method, array $options = []): HttpResponse
    {
        try {
            $response = $this->client->post($method, ['json' => $options]);
        } catch (RequestException $e) {
            throw new RequestError("HTTP request failed: " . $e->getMessage(), $e->getCode(), $e);
        }

        return new HttpResponse($response);
    }
}

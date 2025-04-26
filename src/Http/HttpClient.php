<?php

namespace NanoTel\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use NanoTel\Exceptions\Telegram\RequestError;
use Psr\Http\Message\ResponseInterface;

class HttpClient
{
    private static ?GuzzleClient $client;

    public function __construct(string $baseUri, int $timeOut = 10, int $connectTimeOut = 5)
    {
        self::$client = new GuzzleClient([
            'base_uri'        => rtrim($baseUri, '/') . '/',
            'timeout'         => $timeOut,
            'connect_timeout' => $connectTimeOut,
            'http_errors'     => false,
        ]);
    }

    public static function request(string $method, array $options = []): ResponseInterface
    {
        try {
            $response = self::$client->post($method, ['json' => $options]);
        } catch (RequestException $e) {
            throw new RequestError("HTTP request failed: " . $e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }
}

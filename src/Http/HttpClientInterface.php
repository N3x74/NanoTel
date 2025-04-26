<?php

namespace NanoTel\Http;

use Psr\Http\Message\ResponseInterface;

interface HttpClientInterface
{
    public static function request(string $method, array $options = []): ResponseInterface;
}

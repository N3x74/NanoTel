<?php

namespace NanoTel\Http;
use NanoTel\Http\HttpResponse;

interface HttpClientInterface
{
    public static function request(string $method, array $options = []): HttpResponse;
}

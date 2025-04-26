<?php

namespace NanoTel;

use InvalidArgumentException;
use NanoTel\Http\HttpClient;
use NanoTel\Request\Request;
use SensitiveParameter;

class NanoTel {
    public string $baseUrl = "https://api.telegram.org/bot";

    private ?string $botToken;

    private HttpClient $client;

    public function __construct(#[SensitiveParameter] ?string $botToken = null) {
        if (!$botToken) {
            throw new InvalidArgumentException("Bot token is required");
        }
        $this->botToken = $botToken;
        $this->baseUrl .= $botToken;
        $this->client = new HttpClient($this->baseUrl);
    }

    public function getBotToken(): ?string {
        return $this->botToken;
    }

    public function __call(string $name, array $args = [])
    {
        return Request::{$name}(...$args);
    }
}

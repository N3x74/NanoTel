<?php

namespace NanoTel;

use InvalidArgumentException;
use SensitiveParameter;

class NanoTel {
    private string $botToken;

    public function __construct(#[SensitiveParameter] ?string $botToken = null) {
        if (!$botToken) {
            throw new InvalidArgumentException("Bot token is required");
        }
        $this->botToken = $botToken;
    }

    public function getBotToken(): string {
        return $this->botToken;
    }
}

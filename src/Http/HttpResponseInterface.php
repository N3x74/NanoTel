<?php

namespace NanoTel\Http;

interface HttpResponseInterface
{
    public function result(): object;

    private function handleErrors(): void;
}

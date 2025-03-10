<?php

namespace NanoTel\Request;

interface ResponseInterface
{
    public function result(): object;

    private function handleErrors(): void;
}

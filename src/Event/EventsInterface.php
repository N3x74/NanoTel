<?php

namespace NanoTel\Event;

interface EventsInterface
{
    public static function getEvents(): object;

    public static function InsertEvent(array $event): EventsInterface;

    public static function has(string $item): bool;

    public static function del(string $key): EventsInterface;
}
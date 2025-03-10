<?php

namespace NanoTel\Event;

use NanoTel\Event\EventsInterface;

class Events implements EventsInterface
{
    private static ?object $events = null;

    public static function getEvents(): object
    {
        if (self::$events === null) {
            $response = file_get_contents("php://input");
            $decoded = json_decode($response);

            self::$events = (is_object($decoded)) ? $decoded : new \stdClass();
        }
        
        return self::$events;
    }

    public static function InsertEvent(array $event): EventsInterface
    {
        self::$events = (object) $event;

        return new self();
    }

    public static function has(string $item): bool
    {
        return isset(self::$events->$item);
    }

    public static function del(string $key): EventsInterface
    {
        if (isset(self::$events->$key)) {
            unset(self::$events->$key);
        }
        return new self();
    }
}

<?php


namespace Astaroth\DataFetcher\Events;

/**
 * Trait EventTrait
 * @package Astaroth\DataFetcher\Events
 */
trait EventTrait
{
    private ?int $chat_id = null;

    /**
     * EventTrait constructor.
     * @param object $data
     */
    public function __construct(object $data)
    {
        array_walk($data, function ($value, $property) {
            if (property_exists($this, $property)) {

                if ($property === "peer_id" && $value - 2000000000 > 0) {
                    $this->chat_id = $value - 2000000000;
                }

                if ($property === "payload") {
                    $this->payload = match (gettype($value)) {
                        "object" => (array) $value,
                        "string" => @json_decode($value, true),
                        "array" => $value,
                    };
                } else {
                    $this->$property = $value;
                }
            }
        });
    }
}
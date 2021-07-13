<?php


namespace Astaroth\DataFetcher\Events;

/**
 * Trait EventTrait
 * @package Astaroth\DataFetcher\Events
 */
trait EventTrait
{
    private int $chat_id;

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
                    if (is_object($value)) {
                        $this->payload = $value;
                    } elseif (is_string($value)) {
                        $this->payload = json_encode($value, false);
                    }
                }

                $this->$property = $value;
            }
        });
    }

    /**
     * @getter
     * @param string $field
     * @return mixed
     */
    protected function getField(string $field): mixed
    {
        return $this->$field ?? null;
    }
}
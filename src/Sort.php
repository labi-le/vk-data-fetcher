<?php

declare(strict_types=1);

namespace Astaroth\DataFetcher;

trait Sort
{
    private function sort($data): void
    {
        array_walk($data, function ($value, $property) {
            if (property_exists($this, $property)) {

                if ($property === "peer_id" && $value - 2000000000 > 0) {
                    $this->chat_id = $value - 2000000000;
                }

                if ($property === "payload") {
                    $this->payload = match (gettype($value)) {
                        "object" => (array)$value,
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
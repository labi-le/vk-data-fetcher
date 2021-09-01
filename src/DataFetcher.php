<?php

declare(strict_types=1);


namespace Astaroth\DataFetcher;


use Astaroth\DataFetcher\Events\MessageEvent;
use Astaroth\DataFetcher\Events\MessageNew;
use Astaroth\DataFetcher\Events\WallPostNew;

/**
 * Class DataFetcher
 * @package Bot\Models
 */
class DataFetcher
{
    private object $raw_data;
    private ?object $client_info = null;
    private string $type;
    private int $group_id;
    private string $event_id;
    protected \Closure $callable_sort;


    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return ?object
     */
    public function getClientInfo(): ?object
    {
        return $this->client_info;
    }

    /**
     * @return ?int
     */
    public function getGroupId(): ?int
    {
        return $this->group_id;
    }

    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->event_id;
    }

    public function __construct(private ?object $data = null)
    {
        $this->callable_sort = fn($data) => array_walk($data, function ($value, $property) {
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

        if ($data?->type === "message_new") {
            $this->client_info = $data?->object->client_info;
        }

        $this->type = $data?->type;
        $this->raw_data = $data;
        $this->group_id = $data?->group_id;
        $this->event_id = $data?->event_id;
    }

    /**
     * @return MessageNew
     */
    public function messageNew(): MessageNew
    {
        return new MessageNew($this->data);
    }

    /**
     * @return MessageEvent
     */
    public function messageEvent(): MessageEvent
    {
        return new MessageEvent($this->data);
    }

    /**
     * @return WallPostNew
     */
    public function wallPostNew(): WallPostNew
    {
        return new WallPostNew($this->data);
    }

    /**
     * @return object
     */
    public function getRawData(): object
    {
        return $this->raw_data;
    }
}
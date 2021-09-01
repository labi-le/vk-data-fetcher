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
        return new MessageNew($this->data->object->message);
    }

    /**
     * @return MessageEvent
     */
    public function messageEvent(): MessageEvent
    {
        return new MessageEvent($this->data->object);
    }

    /**
     * @return WallPostNew
     */
    public function wallPostNew(): WallPostNew
    {
        return new WallPostNew($this->data->object);
    }

    /**
     * @return object
     */
    public function getRawData(): object
    {
        return $this->raw_data;
    }
}
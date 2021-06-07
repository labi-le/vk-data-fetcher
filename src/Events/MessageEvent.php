<?php

declare(strict_types=1);


namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\Traits\EventTrait;

/**
 * Class MessageEvent
 * @url https://vk.com/dev/groups_events
 * @package Astaroth\DataFetcher
 */
final class MessageEvent
{
    use EventTrait;

    private int $peer_id;
    private int $user_id;
    private int $conversation_message_id;
    private object $payload;
    private string $event_id;

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->getField("peer_id");
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->getField("user_id");
    }

    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->getField("event_id");
    }

    /**
     * @return object
     */
    public function getPayload(): object
    {
        return $this->getField("payload");
    }

    /**
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->getField("conversation_message_id");
    }

}
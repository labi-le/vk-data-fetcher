<?php

/** @noinspection PhpPureAttributeCanBeAddedInspection */
/** @noinspection PhpUnusedPrivateFieldInspection */


declare(strict_types=1);


namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\DataFetcher;

/**
 * Class MessageEvent
 * @url https://vk.com/dev/groups_events
 * @package Astaroth\DataFetcher
 */
final class MessageEvent extends DataFetcher
{
    use EventTrait;

    private int $peer_id;
    private int $user_id;
    private int $conversation_message_id;
    private array $payload;
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
     * @return array|null
     */
    public function getPayload(): ?array
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

    /**
     * peer_id - 2e9 = chat_id
     * @return int|null
     */
    public function getChatId(): ?int
    {
        return $this->getField("chat_id");
    }
}
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
    private int $peer_id;
    private int $user_id;
    private int $conversation_message_id;
    protected ?array $payload = null;
    private string $event_id;

    protected ?int $chat_id = null;

    public function __construct(?object $data = null)
    {
        parent::__construct($data);
        ($this->callable_sort)($data?->object);
    }

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->peer_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->event_id;
    }

    /**
     * @return array|null
     */
    public function getPayload(): ?array
    {
        return $this->payload;
    }

    /**
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->conversation_message_id;
    }

    /**
     * peer_id - 2e9 = chat_id
     * @return int|null
     */
    public function getChatId(): ?int
    {
        return $this->chat_id;
    }
}
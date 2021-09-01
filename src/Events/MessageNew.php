<?php

/** @noinspection PhpPureAttributeCanBeAddedInspection */
/** @noinspection PhpUnusedPrivateFieldInspection */

declare(strict_types=1);


namespace Astaroth\DataFetcher\Events;


use Astaroth\DataFetcher\DataFetcher;
use Astaroth\DataFetcher\Sort;

/**
 * Class MessageNew
 * vk api >= 5.80
 * @url https://vk.com/dev/objects/message
 * @package Astaroth\DataFetcher
 */
final class MessageNew extends DataFetcher
{
    use Sort;

    private int $id;
    private int $out;
    private int $date;
    private int $peer_id;
    private int $from_id;
    private ?string $text = null;
    private int $random_id;

    private ?string $ref = null;
    private ?string $ref_source = null;
    private ?array $attachments = null;
    private bool $important;
    private ?object $geo = null;
    private ?array $payload = null;
    private ?array $fwd_messages = null;
    private ?object $reply_message = null;
    private ?object $action = null;
    private ?int $admin_author_id = null;
    private int $conversation_message_id;
    private ?bool $is_cropped = null;
    private ?int $members_count = null;
    private ?int $update_time = null;
    private ?bool $was_listened = null;
    private ?int $pinned_at = null;
    private ?string $message_tag = null;


    protected ?int $chat_id = null;

    public function __construct(?object $data = null)
    {
        parent::__construct($data);
        $this->sort($data?->object->message);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
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
    public function getFromId(): int
    {
        return $this->from_id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getRandomId(): int
    {
        return $this->random_id;
    }

    /**
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @return string|null
     */
    public function getRefSource(): ?string
    {
        return $this->ref_source;
    }

    /**
     * @return array|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->important;
    }

    /**
     * @return object|null
     */
    public function getGeo(): ?object
    {
        return $this->geo;
    }

    /**
     * @return array|null
     */
    public function getPayload(): ?array
    {
        return $this->payload;
    }

    /**
     * @return array|null
     */
    public function getFwdMessages(): ?array
    {
        return $this->fwd_messages;
    }

    /**
     * @return array|null
     */
    public function getReplyMessage(): ?object
    {
        return $this->reply_message;
    }

    /**
     * @return object|null
     */
    public function getAction(): ?object
    {
        return $this->action;
    }

    /**
     * @return int|null
     */
    public function getAdminAuthorId(): ?int
    {
        return $this->admin_author_id;
    }

    /**
     * @return int|null
     */
    public function getConversationMessageId(): ?int
    {
        return $this->conversation_message_id;
    }

    /**
     * @return bool|null
     */
    public function isCropped(): ?bool
    {
        return $this->is_cropped;
    }

    /**
     * @return int|null
     */
    public function getMembersCount(): ?int
    {
        return $this->members_count;
    }

    /**
     * @return int|null
     */
    public function getUpdateTime(): ?int
    {
        return $this->update_time;
    }

    /**
     * @return bool|null
     */
    public function isWasListened(): ?bool
    {
        return $this->was_listened;
    }

    /**
     * @return int|null
     */
    public function getPinnedAt(): ?int
    {
        return $this->pinned_at;
    }

    /**
     * @return string|null
     */
    public function getMessageTag(): ?string
    {
        return $this->message_tag;
    }

    public function getChatId(): ?int
    {
        return $this->chat_id;
    }

    /**
     * @return int
     */
    public function getOut(): int
    {
        return $this->out;
    }
}
<?php /** @noinspection PhpPropertyOnlyWrittenInspection */

declare(strict_types=1);


namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\ICompatibleEvent;
use Astaroth\DataFetcher\Traits\EventTrait;

/**
 * Class MessageNew
 * vk api >= 5.80
 * @url https://vk.com/dev/objects/message
 * @package Astaroth\DataFetcher
 */
final class MessageNew implements ICompatibleEvent
{
    use EventTrait;

    private int $id;
    private int $out;
    private int $date;
    private int $peer_id;
    private int $from_id;
    private string $text;
    private int $random_id;

    private string $ref;
    private string $ref_source;
    private array $attachments;
    private bool $important;
    private object $geo;
    private object $payload;
    private array $fwd_messages;
    private array $reply_message;
    private object $action;
    private int $admin_author_id;
    private int $conversation_message_id;
    private bool $is_cropped;
    private int $members_count;
    private int $update_time;
    private bool $was_listened;
    private int $pinned_at;
    private string $message_tag;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getField("id");
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->getField("date");
    }

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
    public function getFromId(): int
    {
        return $this->getField("from_id");
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->getField("text");
    }

    /**
     * @return int
     */
    public function getRandomId(): int
    {
        return $this->getField("random_id");
    }

    /**
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->getField("ref");
    }

    /**
     * @return string|null
     */
    public function getRefSource(): ?string
    {
        return $this->getField("ref_source");
    }

    /**
     * @return array|null
     */
    public function getAttachments(): ?array
    {
        return $this->getField("attachments");
    }

    /**
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->getField("important");
    }

    /**
     * @return object|null
     */
    public function getGeo(): ?object
    {
        return $this->getField("geo");
    }

    /**
     * @return string|null
     */
    public function getPayload(): ?object
    {
        return $this->getField("payload");
    }

    /**
     * @return array
     */
    public function getFwdMessages(): array
    {
        return $this->getField("fwd_messages");
    }

    /**
     * @return array|null
     */
    public function getReplyMessage(): ?array
    {
        return $this->getField("reply_message");
    }

    /**
     * @return object|null
     */
    public function getAction(): ?object
    {
        return $this->getField("action");
    }

    /**
     * @return int|null
     */
    public function getAdminAuthorId(): ?int
    {
        return $this->getField("admin_author_id");
    }

    /**
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->getField("conversation_message_id");
    }

    /**
     * @return bool|null
     */
    public function isCropped(): ?bool
    {
        return $this->getField("is_cropped");
    }

    /**
     * @return int|null
     */
    public function getMembersCount(): ?int
    {
        return $this->getField("members_count");
    }

    /**
     * @return int|null
     */
    public function getUpdateTime(): ?int
    {
        return $this->getField("update_time");
    }

    /**
     * @return bool|null
     */
    public function isWasListened(): ?bool
    {
        return $this->getField("was_listened");
    }

    /**
     * @return int|null
     */
    public function getPinnedAt(): ?int
    {
        return $this->getField("pinned_at");
    }

    /**
     * @return string|null
     */
    public function getMessageTag(): ?string
    {
        return $this->getField("message_tag");
    }

    /**
     * @return int
     */
    public function getOut(): int
    {
        return $this->getField("out");
    }
}
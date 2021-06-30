<?php

/** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpUnusedPrivateFieldInspection */


namespace Astaroth\DataFetcher\Events;

/**
 * Class WallPostNew
 * @package Astaroth\DataFetcher\Events
 */
final class WallPostNew
{
    use EventTrait;

    private int $id;
    private int $from_id;
    private int $owner_id;
    private int $date;
    private int $marked_as_ads;
    private string $post_type;
    private string $text;
    private int $can_edit;
    private int $created_by;
    private object $comments;
    private bool $is_favorite;
    private object $donut;
    private int|float $short_text_rate;
    private int $can_delete;

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
    public function getFromId(): int
    {
        return $this->getField("from_id");
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->getField("owner_id");
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
    public function getMarkedAsAds(): int
    {
        return $this->getField("marked_as_ads");
    }

    /**
     * @return string
     */
    public function getPostType(): string
    {
        return $this->getField("post_type");
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
    public function getCanEdit(): int
    {
        return $this->getField("can_edit");
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->getField("created_by");
    }

    /**
     * @return int
     */
    public function getCanDelete(): int
    {
        return $this->getField("can_delete");
    }

    /**
     * @return object
     */
    public function getComments(): object
    {
        return $this->getField("comments");
    }

    /**
     * @return bool
     */
    public function isIsFavorite(): bool
    {
        return $this->getField("is_favorite");
    }

    /**
     * @return object
     */
    public function getDonut(): object
    {
        return $this->getField("donut");
    }

    /**
     * @return float|int
     */
    public function getShortTextRate(): float|int
    {
        return $this->getField("short_text_rate");
    }
}
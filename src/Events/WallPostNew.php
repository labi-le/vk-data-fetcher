<?php

/** @noinspection PhpPureAttributeCanBeAddedInspection */

/** @noinspection PhpUnusedPrivateFieldInspection */


namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\DataFetcher;
use Astaroth\DataFetcher\Sort;

/**
 * Class WallPostNew
 * @package Astaroth\DataFetcher\Events
 */
final class WallPostNew extends DataFetcher
{
    use Sort;

    private int $id;
    private int $from_id;
    private int $owner_id;
    private int $date;
    private int $marked_as_ads;
    private ?string $post_type = null;
    private ?string $text = null;
    private int $can_edit;
    private int $created_by;
    private ?object $comments = null;
    private bool $is_favorite;
    private ?object $donut = null;
    private int|null|float $short_text_rate = null;
    private int $can_delete;

    public function __construct(?object $data = null)
    {
        parent::__construct($data);
        $this->sort($data?->object);
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
    public function getFromId(): int
    {
        return $this->from_id;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->owner_id;
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
    public function getMarkedAsAds(): int
    {
        return $this->marked_as_ads;
    }

    /**
     * @return string|null
     */
    public function getPostType(): ?string
    {
        return $this->post_type;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getCanEdit(): int
    {
        return $this->can_edit;
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->created_by;
    }

    /**
     * @return int
     */
    public function getCanDelete(): int
    {
        return $this->can_delete;
    }

    /**
     * @return object|null
     */
    public function getComments(): ?object
    {
        return $this->comments;
    }

    /**
     * @return bool
     */
    public function isFavorite(): bool
    {
        return $this->is_favorite;
    }

    /**
     * @return object|null
     */
    public function getDonut(): ?object
    {
        return $this->donut;
    }

    /**
     * @return float|int|null
     */
    public function getShortTextRate(): null|float|int
    {
        return $this->short_text_rate;
    }
}
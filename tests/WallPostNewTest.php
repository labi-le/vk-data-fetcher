<?php

namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\DataFetcher;
use PHPUnit\Framework\TestCase;

class WallPostNewTest extends TestCase
{
    private const RAW_JSON = '{
    "type": "wall_post_new",
    "object": {
        "id": 3,
        "from_id": -200982061,
        "owner_id": -200982061,
        "date": 1625077562,
        "marked_as_ads": 0,
        "post_type": "post",
        "text": "sasasa",
        "can_edit": 1,
        "created_by": 259166248,
        "can_delete": 1,
        "comments": {
            "count": 0
        },
        "is_favorite": false,
        "donut": {
            "is_donut": false
        },
        "short_text_rate": 0.8
    },
    "group_id": 200982061,
    "event_id": "a3d8db064eee739697f6801b727d625edd48787a"
}';

    private WallPostNew $p;

    protected function setUp(): void
    {
        $data = new DataFetcher(json_decode(self::RAW_JSON, false));
        $this->p = $data->wallPostNew();
    }

    public function testGetOwnerId()
    {
        self::assertIsInt($this->p->getOwnerId());
    }

    public function testGetDate()
    {
        self::assertIsInt($this->p->getDate());
    }

    public function testGetId()
    {
        self::assertIsInt($this->p->getId());
    }

    public function testGetText()
    {
        self::assertIsString($this->p->getText());
    }

    public function testGetComments()
    {
        self::assertIsObject($this->p->getComments());
    }

    public function testGetMarkedAsAds()
    {
        self::assertIsInt($this->p->getMarkedAsAds());
    }

    public function testGetDonut()
    {
        self::assertIsObject($this->p->getDonut());
    }

    public function testGetShortTextRate()
    {
        self::assertIsNumeric($this->p->getShortTextRate());
    }

    public function testGetCanEdit()
    {
        self::assertIsInt($this->p->getCanEdit());
    }

    public function testGetCanDelete()
    {
        self::assertIsInt($this->p->getCanDelete());
    }

    public function testGetFromId()
    {
        self::assertIsInt($this->p->getFromId());
    }

    public function testIsIsFavorite()
    {
        self::assertIsBool($this->p->isFavorite());
    }

    public function testGetPostType()
    {
        self::assertIsString($this->p->getPostType());
    }

    public function testGetCreatedBy()
    {
        self::assertIsInt($this->p->getCreatedBy());
    }
}

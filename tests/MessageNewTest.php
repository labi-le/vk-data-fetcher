<?php

declare(strict_types=1);


use Astaroth\DataFetcher\DataFetcher;
use Astaroth\DataFetcher\Events\MessageNew;
use PHPUnit\Framework\TestCase;

class MessageNewTest extends TestCase
{
    private const RAW_INPUT_DATA_MESSAGE_NEW = '{"type": "message_new","object": {"message": {"date": 1622990967,"from_id": 418618,"id": 0, "action": {"type": "chat_kick_user","member_id": 418618}, "reply_message":{}, "was_listened":false, "ref": "ref", "message_tag": "tag", "ref_source":"ref", "members_count":7,"admin_author_id":88,"pinned_at":72817288,"update_time":3283832, "out": 0,"peer_id": 2000000003,"text": "astaroth","conversation_message_id": 1377,"fwd_messages": [],"important": false,"random_id": 0,"payload": {"settings": "test_key"},"attachments": [{"type": "photo","photo": {"album_id": -3,"date": 1622993751,"id": 457242921,"owner_id": 418618,"has_tags": false,"access_key": "163e1a080d1691860e","sizes": [{    "height": 75,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=42x75&quality=96&sign=4ee2d5efc7e36954ac4c06ffb7f8cada&c_uniq_tag=xdhjNELMVyOZwOslB_rlnjZdaOzn6KJk1qcgsorsXb0&type=album",    "type": "s",    "width": 42},{    "height": 130,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=73x130&quality=96&sign=21ade76f738e9b0172d06099f334e55b&c_uniq_tag=TpgCFiU8I_huIzB6efqRgkaSm7sGb12aSdcw3nI2fF4&type=album",    "type": "m",    "width": 73},{    "height": 604,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=340x604&quality=96&sign=062bf7ae6a014397c3d6a73bd0b45a6c&c_uniq_tag=jg4hMK3Br7efHLW-ktVegrTEOL2vvFzsMTP9SXRturg&type=album",    "type": "x",    "width": 340},{    "height": 807,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=454x807&quality=96&sign=30bb4b5a3033610c63bc00c7bdf86c21&c_uniq_tag=RZjGH-zjMMDwOOdfavmDYB1gWImajsoOzCsXcmoF91Y&type=album",    "type": "y",    "width": 454},{    "height": 1080,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=607x1080&quality=96&sign=52b27953fe92136a9aa64790eb46a28a&c_uniq_tag=UfKIP14ejN3ordaQJT7gDAikYoW0N7sXBbsE4XpD3TA&type=album",    "type": "z",    "width": 607},{    "height": 1600,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=900x1600&quality=96&sign=42a9239e9a9af0a362d874974a3a5888&c_uniq_tag=D7jeBbJQYvnVeNZoaZUg7kPknLg0cG232zH3ggk9jAI&type=album",    "type": "w",    "width": 900},{    "height": 231,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=130x231&quality=96&sign=2c75f5e29a764ec3a50d175515caf5eb&c_uniq_tag=WCBYn6ZOm_JCtUG_8AZ6ASZVVSpuBDdH0KqBoWyqw3g&type=album",    "type": "o",    "width": 130},{    "height": 355,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=200x356&quality=96&sign=27311875cf52205dc4fd74386340d5ab&c_uniq_tag=vJR0YOqjFmeNGrMXLYYXGKGZpRKK3YK1nVakGDxBivI&type=album",    "type": "p",    "width": 200},{    "height": 569,    "url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=320x569&quality=96&sign=a5ac3cc36ee28ed9df3c17de160ae89c&c_uniq_tag=z9WIl9S-C8ChWis-tcqbrUAWA3kY9TwK_6kKWSyNMew&type=album",    "type": "q",    "width": 320},{"height": 900,"url": "https://sun9-9.userapi.com/impg/_OcZbwysQ198r2aib3TPk8gNSFJo56hEKqTAuA/IH8MFsKRReI.jpg?size=510x900&quality=96&crop=0,0,900,1588&sign=89c690ebe88d84c414982bb726352718&c_uniq_tag=-pOxAeKeQ9Lk6MIjkG31vAOW1W6jijzGFWVvbxB3kEw&type=album","type": "r","width": 510}],"text": ""}}],"geo": {"type": "point","coordinates": {"latitude": 57.918701,"longitude": 60.141824},"place": {"country": "Россия","city": "Нижний Тагил","title": "Нижний Тагил, Россия"}},"is_hidden": false,"is_cropped": true},"client_info": {"button_actions": ["text","vkpay","open_app","location","open_link","callback","intent_subscribe","intent_unsubscribe"],"keyboard": true,"inline_keyboard": true,"carousel": true,"lang_id": 0}},"group_id": 196756261,"event_id": "4ed07b8f5c5f56080ccd643aba529ec78e448eb1"}';
    private MessageNew $m;

    protected function setUp(): void
    {
        $data = new DataFetcher(json_decode(self::RAW_INPUT_DATA_MESSAGE_NEW, false));
        $this->m = $data->messageNew();
    }

    public function testGetText(): void
    {
        self::assertEquals("astaroth", $this->m->getText());
    }

    public function testGetRefSource(): void
    {
        self::assertIsString($this->m->getRefSource());
    }

    public function testGetMembersCount(): void
    {
        self::assertIsInt($this->m->getMembersCount());
    }

    public function testIsImportant(): void
    {
        self::assertIsBool($this->m->isImportant());
    }

    public function testGetOut(): void
    {
        self::assertIsInt($this->m->getOut());
    }

    public function testGetFwdMessages(): void
    {
        self::assertIsArray($this->m->getFwdMessages());
    }

    public function testGetRef(): void
    {
        self::assertIsString($this->m->getRef());
    }

    public function testGetPeerId(): void
    {
        self::assertIsInt($this->m->getPeerId());
    }


    public function testGetChatId(): void
    {
        self::assertIsInt($this->m->getChatId());
    }

    public function testGetAdminAuthorId(): void
    {
        self::assertIsInt($this->m->getAdminAuthorId());
    }

    public function testGetGeo(): void
    {
        self::assertIsObject($this->m->getGeo());
    }

    public function testGetPayload(): void
    {
        self::assertIsObject($this->m->getPayload());
    }

    public function testGetPinnedAt(): void
    {
        self::assertIsInt($this->m->getPinnedAt());
    }

    public function testGetAttachments(): void
    {
        self::assertIsArray($this->m->getAttachments());
    }

    public function testGetMessageTag(): void
    {
        self::assertIsString($this->m->getMessageTag());
    }

    public function testGetDate(): void
    {
        self::assertIsInt($this->m->getDate());
    }

    public function testGetAction(): void
    {
        self::assertIsObject($this->m->getAction());
    }

    public function testGetUpdateTime(): void
    {
        self::assertIsInt($this->m->getUpdateTime());
    }

    public function testGetId(): void
    {
        self::assertIsInt($this->m->getId());
    }

    public function testGetReplyMessage(): void
    {
        self::assertIsObject($this->m->getReplyMessage());
    }

    public function testGetConversationMessageId(): void
    {
        self::assertIsInt($this->m->getConversationMessageId());
    }

    public function testIsWasListened(): void
    {
        self::assertIsBool($this->m->isWasListened());
    }

    public function testGetFromId(): void
    {
        self::assertIsInt($this->m->getFromId());
    }

    public function testGetRandomId(): void
    {
        self::assertIsInt($this->m->getRandomId());
    }

    public function testIsCropped(): void
    {
        self::assertIsBool($this->m->isCropped());
    }
}

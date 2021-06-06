<?php

declare(strict_types=1);


namespace Astaroth\DataFetcher\Events;

use Astaroth\DataFetcher\DataFetcher;
use PHPUnit\Framework\TestCase;

class MessageEventTest extends TestCase
{
    private const RAW_INPUT_DATA_MESSAGE_EVENT = '{"type": "message_event","object": {"user_id": 418618,"peer_id": 2000000003,"event_id": "19d28efbff4b","payload": {"settings": "anti_spam"},"conversation_message_id": 286292},"group_id": 196756261,"event_id": "a5aa88e27d13a7a5ce66464732c55fe8e93faaf9"}';
    private MessageEvent $m;

    protected function setUp(): void
    {
        $data = new DataFetcher(json_decode(self::RAW_INPUT_DATA_MESSAGE_EVENT, false));
        $this->m = $data->MessageEvent();
    }

    public function testGetPeerId(): void
    {
        self::assertIsInt($this->m->getPeerId());
    }

    public function testGetPayload(): void
    {
        self::assertIsObject($this->m->getPayload());
    }

    public function testGetEventId(): void
    {
        self::assertIsString($this->m->getEventId());
    }

    public function testGetConversationMessageId(): void
    {
        self::assertIsInt($this->m->getConversationMessageId());
    }

    public function testGetChatId(): void
    {
        self::assertIsInt($this->m->getChatId());
    }
}

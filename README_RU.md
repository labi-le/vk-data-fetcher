# vk-data-fetcher

[![GitHub license](https://img.shields.io/badge/license-BSD-green.svg)](https://github.com/labi-le/vk-data-fetcher/blob/main/LICENSE)
[![Packagist Stars](https://img.shields.io/packagist/stars/labile/vk-data-fetcher)](https://packagist.org/packages/labile/vk-data-fetcher/stats)
[![Packagist Stats](https://img.shields.io/packagist/dt/labile/vk-data-fetcher)](https://packagist.org/packages/labile/vk-data-fetcher/stats)

## Установка

`composer require labile/vk-data-fetcher`

### Сборщик данных для ботов вконтакте

```php
<?php

declare(strict_types=1);

use Astaroth\DataFetcher\DataFetcher;

$input_data = json_decode("vk json object", false);

$data = new DataFetcher($input_data);

$raw_data = $data->getRawData();
//$raw_data->...

if ($data->getType() === "message_new"){
    $message_new = $data->messageNew();
    
    $message_new->getText();
    $message_new->getAttachments();
    $message_new->getFromId();
    $message_new->getPayload();
    //...
}

if ($data->getType() === "message_event"){
    $message_event = $data->messageEvent();

    $message_event->getConversationMessageId();
    $message_event->getPeerId();
    $message_event->getEventId();
    $message_event->getChatId();
    //...
}

```


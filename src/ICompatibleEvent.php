<?php

declare(strict_types=1);


namespace Astaroth\DataFetcher;

/**
 * Interface ICompatibleEvent
 * @package Astaroth\DataFetcher
 */
interface ICompatibleEvent
{
    public function getFromId(): ?int;

    public function getPeerId(): ?int;

    public function getChatId(): ?int;
}
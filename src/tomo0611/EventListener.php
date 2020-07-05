<?php

declare(strict_types=1);

namespace tomo0611;

use pocketmine\event\Listener;

class EventListener implements Listener
{

    /** @var WorldEditSE */
    private $ctx;

    public function __construct(WorldEditSE $context)
    {
        $this->ctx = $context;
    }
}
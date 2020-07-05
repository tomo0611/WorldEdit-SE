<?php

declare(strict_types = 1);

namespace tomo0611\commands\subs;

use pocketmine\Player;
use tomo0611\WorldEditSE;

/**
 * Class WorldEditSESubCommand
 * @package tomo0611\commands\subs
 */

abstract class WorldEditSESubCommand {

    /** @var WorldEditSE */
    protected $ctx;

    /** @var Player */
    protected $player;
    
    public function __construct(WorldEditSE $ctx, Player $player, array $args = []) {
        $this->ctx = $ctx;
        $this->player = $player;
        $this->execute($args);
    }
    
    abstract public function execute(array $args = []): void;
}
<?php

declare(strict_types = 1);

namespace tomo0611\commands\subs;

use pocketmine\Player;

/**
 * Class WorldEditSESubCommand
 * @package tomo0611\commands\subs
 */

abstract class WorldEditSESubCommand {

    /** @var Player */
    protected $player;
    
    public function __construct(Player $player, string $default = "") {
        $this->player = $player;
        $this->execute($default);
    }
    
    abstract public function execute(string $default = ""): void;
}
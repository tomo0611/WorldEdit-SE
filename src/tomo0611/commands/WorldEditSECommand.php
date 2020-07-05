<?php

declare(strict_types=1);

namespace tomo0611\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use tomo0611\WorldEditSE;

/**
 * Class WorldEditSECommand
 * @package tomo0611/commands
 */
class WorldEditSECommand extends Command implements PluginIdentifiableCommand
{

    /** @var WorldEditSE */
    private $ctx;

    public function __construct(WorldEditSE $context)
    {
        $this->ctx = $context;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        // TODO: Implement execute() method.
    }

    public function getPlugin(): Plugin
    {
        return $this->ctx;
    }
}
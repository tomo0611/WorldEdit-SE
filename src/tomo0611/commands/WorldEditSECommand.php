<?php

declare(strict_types = 1);

namespace tomo0611\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;

/**
 * Class WorldEditSECommand
 * @package tomo0611/commands
 */

class WorldEditSECommand extends Command implements PluginIdentifiableCommand {
    public function __construct() {
    }
    
    public function execute(CommandSender $sender, string $commandLabel, array $args) {
    }
}
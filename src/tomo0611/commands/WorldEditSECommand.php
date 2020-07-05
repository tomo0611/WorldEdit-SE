<?php

declare(strict_types=1);

namespace tomo0611\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use tomo0611\commands\subs\Pos1Command;
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
        parent::__construct("wse","World Edit SE 2020");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        var_dump($args);
        if(count($args)==0){

        }else{
            switch ($args[0]){
                case "pos1":
                    new Pos1Command($this->ctx,$sender);
                    break;
            }
        }
        // TODO: Implement execute() method.
    }

    public function getPlugin(): Plugin
    {
        return $this->ctx;
    }

}
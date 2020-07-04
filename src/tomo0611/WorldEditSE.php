<?php

declare(strict_types=1);

namespace tomo0611;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class WorldEditSE extends PluginBase{

	public function onLoad() : void{
        $this->getLogger()->notice("has just been loaded!");
	}

	public function onEnable() : void{
		@mkdir($this->getDataFolder());
		$this->getLogger()->notice("has just been enabled!");
        $listener = new EventListener($this);
        $this->getServer()->getPluginManager()->registerEvents($listener, $this);
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "wse":
                    var_dump($args);
                    $this->getLogger()->info("Hello!");
					return true;
			default:
				return false;
		}
	}

}
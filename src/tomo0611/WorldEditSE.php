<?php

declare(strict_types=1);

namespace tomo0611;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use tomo0611\commands\WorldEditSECommand;
use tomo0611\managers\JobManager;

class WorldEditSE extends PluginBase
{

    /** @var JobManager */
    private $jobManager;

    public function onLoad(): void
    {
        $this->getLogger()->notice("has just been loaded!");
    }

    public function onEnable(): void
    {
        @mkdir($this->getDataFolder());
        $this->getLogger()->notice("has just been enabled!");
        $listener = new EventListener($this);
        $this->getServer()->getPluginManager()->registerEvents($listener, $this);
        $this->registerCommands();
        $this->initManagers();
    }

    private function registerCommands(): void
    {
        $map = $this->getServer()->getCommandMap();
        $commands = [new WorldEditSECommand($this)];
        $map->registerAll($this->getName(), $commands);
    }

    private function initManagers(): void
    {
        $this->jobManager = new JobManager();
    }

    public function getJobManager(): JobManager{
        return $this->jobManager;
    }

}
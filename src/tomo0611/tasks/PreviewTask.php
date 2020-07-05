<?php

declare(strict_types = 1);

namespace tomo0611\tasks;

use pocketmine\level\particle\PortalParticle;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Task;
use tomo0611\models\Job;
use tomo0611\WorldEditSE;

class PreviewTask extends Task
{

    /** @var WorldEditSE */
    private $ctx;

    /** @var Job */
    private $job;

    public function __construct(WorldEditSE $ctx, Job $job) {
        $this->ctx = $ctx;
        $this->job = $job;
    }

    public function onRun(int $currentTick)
    {
        $player = $this->job->getPlayer();
        if(!$player->isConnected()){
            $this->ctx->getScheduler()->cancelTask($this->getTaskId());
            return;
        }

        $r = $player->getPosition()->distance($this->job->getPos1());
        for ($n=0;$n<360;$n+=1) {
            $rad = deg2rad($n);
            $x = round(($r*sin($rad)) + $this->job->getPos1()->getFloorX());
            $y = $player->getFloorY();
            $z = round(($r*cos($rad)) + $this->job->getPos1()->getFloorZ());
            $pos = new Vector3($x,$y,$z);
            $particle = new PortalParticle($pos);
            $player->getPosition()->getLevel()->addParticle($particle);
        }
    }
}
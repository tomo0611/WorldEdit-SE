<?php

declare(strict_types = 1);

namespace tomo0611\commands\subs;

use tomo0611\models\Job;
use tomo0611\tasks\PreviewTask;

/**
 * Class Pos1Command
 * @package tomo0611\commands\subs
 */
class Pos1Command extends WorldEditSESubCommand
{

    public function execute(array $args=[]): void
    {
        $this->player->sendActionBarMessage("Next job is is ".$this->ctx->getJobManager()->getNextJobId()."!!");
        $job = new Job($this->player,$this->ctx->getJobManager()->getNextJobId());
        $job->setPos1($this->player->getPosition());
        $this->ctx->getJobManager()->addJob($job);
        $this->ctx->getScheduler()->scheduleRepeatingTask(new PreviewTask($this->ctx,$job),10);
        // TODO: Implement execute() method.
    }

}
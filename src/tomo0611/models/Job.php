<?php

declare(strict_types=1);

namespace tomo0611\models;

use pocketmine\level\Position;
use pocketmine\Player;
use tomo0611\enums\JobStatus;

/**
 * Class Job
 * @package tomo0611/models
 */
class Job
{

    /** @var Player  */
    private $player;

    /** @var int */
    private $jobid;

    /** @var Position */
    private $pos1;

    /** @var Position */
    private $pos2;

    /** @var float */
    private $r;

    /** @var \DateTime */
    private $datetime;

    /** @var JobStatus */
    private $jobstatus;

    public function __construct(Player $player, int $jobid)
    {
        $this->player = $player;
        $this->jobid = $jobid;
        $this->datetime = new \DateTime();
        $this->jobstatus = JobStatus::IN_SETUP;
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function setPos1(Position $pos1): void{
        $this->pos1 = $pos1;
    }

    public function getPos1(): ?Position{
        return $this->pos1;
    }

    public function setPos2(Position $pos2): void{
        $this->pos2 = $pos2;
    }

    public function getPos2(): ?Position {
        return $this->pos2;
    }

}
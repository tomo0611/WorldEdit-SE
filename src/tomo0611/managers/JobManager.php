<?php

declare(strict_types=1);

namespace tomo0611\managers;

use tomo0611\models\Job;

/**
 * Class JobManager
 * @package tomo0611/managers
 */
class JobManager
{

    private array $jobs = array();

    public function __construct()
    {
    }

    public function addJob(Job $job){
        $name = $job->getPlayer()->getName();
        if(!isset($this->jobs[$name])){
            $this->jobs[$name] = [];
        }
        array_push($this->jobs[$name],[$job]);
    }

    public function getNextJobId(): Int{
        $c = 1;
        foreach ($this->jobs as $p=>$job_for) {
            $c+=count($job_for);
        }
        return $c;
    }
}
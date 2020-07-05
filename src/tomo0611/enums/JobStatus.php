<?php

declare(strict_types=1);

namespace tomo0611\enums;

class JobStatus{

    const __default = self::IN_SETUP;

    const IN_SETUP = 1;
    const IN_QUEUE = 2;
    const ON_GOING = 3;
    const IN_PROGRESS = 4;
    const DONE = 5;
    const FAILED = 6;
}
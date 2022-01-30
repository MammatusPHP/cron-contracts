<?php

declare(strict_types=1);

namespace Mammatus\Cron\Contracts;

interface Action
{
    public function perform(): void;
}

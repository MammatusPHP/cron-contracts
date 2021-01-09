<?php

declare(strict_types=1);

namespace Mammatus\Cron\Contracts;

use React\Promise\PromiseInterface;

interface Action
{
    public function Perform(): PromiseInterface;
}

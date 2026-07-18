<?php

declare(strict_types=1);

namespace Mammatus\Cron\Contracts;

/** @api */
interface Action
{
    public function perform(): void;
}

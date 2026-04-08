<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

class Message
{
    public function __construct(
        /** @var Process[] */
        readonly array $processes = [],
    ) {
    }
}

<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class StatusZusatzInformation
{
    public function __construct(
        public ?string $art,
        public ?string $status
    ) {
    }
}

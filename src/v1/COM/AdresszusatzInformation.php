<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class AdresszusatzInformation
{
    public function __construct(
        public ?string $zusatz1,
        public ?string $zusatz2,
        public ?string $zusatz3,
        public ?string $zusatz4,
        public ?string $zusatz5,
    ) {
    }
}

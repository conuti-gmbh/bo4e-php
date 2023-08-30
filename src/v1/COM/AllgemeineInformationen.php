<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class AllgemeineInformationen
{
    public function __construct(
        public ?string $info1,
        public ?string $info2,
        public ?string $info3,
        public ?string $info4,
        public ?string $info5
    ) {
    }
}

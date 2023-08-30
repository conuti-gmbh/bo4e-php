<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Tagesparameter
{
    public function __construct(
        public ?string $klimazone,
        public ?string $temperaturmessstelle,
        public ?string $dienstanbieter,
        public ?string $herausgeber,
    ) {
    }
}

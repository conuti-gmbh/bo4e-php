<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Abweichungsposition
{
    public function __construct(
        public ?string $abweichungsgrundCode,
        public ?string $abweichungsgrundCodeliste,
        public ?string $abweichungsgrundBemerkung,
        public ?string $zugehoerigeRechnung,
        public ?string $zugehoerigeBestellung,
    ) {
    }
}

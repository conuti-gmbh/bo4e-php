<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\FehlerTyp;

class Fehler
{
    public function __construct(
        public ?FehlerTyp $typ,
        /** @var FehlerDetail[] */
        public array $fehlerDetails = [],
    ) {
    }
}

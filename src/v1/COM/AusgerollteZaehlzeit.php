<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class AusgerollteZaehlzeit
{
    public function __construct(
        public ?DateTime $aenderungeszeitpunkt,
        public ?string $register
    ) {
    }
}

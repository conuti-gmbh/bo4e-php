<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class AusgerollteZaehlzeit
{
    public function __construct(
        readonly ?DateTime $aenderungeszeitpunkt,
        readonly ?string $register
    ) {
    }
}

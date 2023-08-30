<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Rufnummernart;

class Rufnummer
{
    public function __construct(
        public ?Rufnummernart $nummerntyp,
        public ?string $rufnummer
    ) {
    }
}

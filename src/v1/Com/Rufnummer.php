<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Rufnummernart;

class Rufnummer
{
    public function __construct(
        readonly ?Rufnummernart $nummerntyp = null,
        readonly ?string $rufnummer = null,
    ) {
    }
}

<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ZuschlagTyp;

class Zuschlag
{
    public function __construct(
        readonly ZuschlagTyp $typ,
        readonly ?float $prozent
    ) {
    }
}

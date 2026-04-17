<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\ZuschlagTyp;

class Zuschlag
{
    public function __construct(
        readonly ?ZuschlagTyp $typ = null,
        readonly ?float $prozent = null,
    ) {
    }
}

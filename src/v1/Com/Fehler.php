<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\FehlerTyp;

class Fehler
{
    public function __construct(
        readonly ?FehlerTyp $typ = null,
        /** @var ?FehlerDetail[] */
        readonly ?array $fehlerDetails = null,
    ) {
    }
}

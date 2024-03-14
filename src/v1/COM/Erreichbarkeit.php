<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Verfuegbarkeit;

class Erreichbarkeit
{
    public function __construct(
        readonly ?Verfuegbarkeit $verfuegbarkeit = null,
        readonly ?string $zeit = null,
    ) {
    }
}

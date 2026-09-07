<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;

class DatenDerBeteiligtenMarktrolle
{
    public function __construct(
        readonly ?DateTime $bilanzierungsbeginn = null,
        readonly ?DateTime $bilanzierungsende = null,
    ) {
    }
}

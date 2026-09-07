<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Mengeneinheit;
use DateTime;

class Menge
{
    public function __construct(
        readonly ?float $wert = null,
        readonly ?Mengeneinheit $einheit = null,
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
    ) {
    }
}

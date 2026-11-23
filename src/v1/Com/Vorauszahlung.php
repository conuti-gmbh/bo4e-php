<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Waehrungseinheit;
use DateTime;

class Vorauszahlung
{
    public function __construct(
        readonly ?float $wert = null,
        readonly ?Waehrungseinheit $waehrung = null,
        readonly ?string $referenzVorgaengerrechnung = null,
        readonly ?DateTime $datumVorgaengerrechnung = null,
    ) {
    }
}

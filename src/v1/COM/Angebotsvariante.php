<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Angebotsstatus;
use DateTime;

class Angebotsvariante
{
    public function __construct(
        readonly ?Angebotsstatus $angebotsstatus,
        readonly ?string $beschreibung,
        readonly ?DateTime $erstelldatum,
        readonly ?DateTime $bindefrist,
        readonly ?Menge $gesamtmenge,
        readonly ?Betrag $gesamtkosten,
        /** @var array<Angebotsteil> $teile */
        readonly array $teile
    ) {
    }
}

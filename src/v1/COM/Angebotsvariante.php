<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Angebotsstatus;
use DateTime;

class Angebotsvariante
{
    public function __construct(
        readonly ?Angebotsstatus $angebotsstatus = null,
        readonly ?string $beschreibung = null,
        readonly ?DateTime $erstelldatum = null,
        readonly ?DateTime $bindefrist = null,
        readonly ?Menge $gesamtmenge = null,
        readonly ?Betrag $gesamtkosten = null,
        /** @var array<Angebotsteil> $teile */
        readonly array $teile = [],
    ) {
    }
}

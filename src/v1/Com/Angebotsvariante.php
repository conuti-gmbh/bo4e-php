<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

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
        /** @var Angebotsteil[] */
        readonly array $teile = [],
    ) {
    }
}

<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Angebotsvariante
{
    public function __construct(
        public ?string $angebotsstatus,
        public ?string $beschreibung,
        public ?DateTime $erstelldatum,
        public ?DateTime $bindefrist,
        public ?Menge $gesamtmenge,
        public ?Betrag $gesamtkosten,
        /** @var array<Angebotsteil> $teile */
        public array $teile
    ) {
    }
}

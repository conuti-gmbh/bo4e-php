<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Statusanlass;

class StatusmitteilungPosition
{
    public function __construct(
        public ?int $positionsnummer,
        public ?string $bearbeitungsdatum,
        public ?string $verwendungAb,
        public ?string $verwendungBis,
        public ?string $enddatum,
        public ?Auftragsstatus $auftragsstatus,
        public ?Statusanlass $statusanlass,
        public ?string $antwortstatus,
        public ?Fehlerbeschreibung $fehlerbeschreibung,
        public ?Begruendung $begruendung,
        public ?string $lokationsId,
        public ?string $referenzMelo,
        public ?AllgemeineInformationen $allgemeineInformationen
    ) {
    }
}

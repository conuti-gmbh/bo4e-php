<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Statusanlass;

class StatusmitteilungPosition
{
    public function __construct(
        readonly ?int $positionsnummer,
        readonly ?string $bearbeitungsdatum,
        readonly ?string $verwendungAb,
        readonly ?string $verwendungBis,
        readonly ?string $enddatum,
        readonly ?Auftragsstatus $auftragsstatus,
        readonly ?Statusanlass $statusanlass,
        readonly ?string $antwortstatus,
        readonly ?Fehlerbeschreibung $fehlerbeschreibung,
        readonly ?Begruendung $begruendung,
        readonly ?string $lokationsId,
        readonly ?string $referenzMelo,
        readonly ?AllgemeineInformationen $allgemeineInformationen
    ) {
    }
}

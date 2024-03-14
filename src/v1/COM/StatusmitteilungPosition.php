<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Statusanlass;

class StatusmitteilungPosition
{
    public function __construct(
        readonly ?int $positionsnummer = null,
        readonly ?string $bearbeitungsdatum = null,
        readonly ?string $verwendungAb = null,
        readonly ?string $verwendungBis = null,
        readonly ?string $enddatum = null,
        readonly ?Auftragsstatus $auftragsstatus = null,
        readonly ?Statusanlass $statusanlass = null,
        readonly ?string $antwortstatus = null,
        readonly ?Fehlerbeschreibung $fehlerbeschreibung = null,
        readonly ?Begruendung $begruendung = null,
        readonly ?string $lokationsId = null,
        readonly ?string $referenzMelo = null,
        readonly ?AllgemeineInformationen $allgemeineInformationen = null,
        /** @var Auftragsstatus[] */
        readonly array $auftragsStatusListe = [],
    ) {
    }
}

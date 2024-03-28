<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;
use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Statusanlass;

class StatusmitteilungPosition
{
    public function __construct(
        readonly ?int $positionsnummer = null,
        readonly ?DateTime $bearbeitungsdatum = null,
        readonly ?DateTime $verwendungAb = null,
        readonly ?DateTime $verwendungBis = null,
        readonly ?DateTime $enddatum = null,
        readonly ?Auftragsstatus $auftragsstatus = null,
        readonly ?Statusanlass $statusanlass = null,
        readonly ?string $antwortstatus = null,
        readonly ?Fehlerbeschreibung $fehlerbeschreibung = null,
        readonly ?Begruendung $begruendung = null,
        readonly ?string $lokationsId = null,
        readonly ?string $referenzMelo = null,
        readonly ?AllgemeineInformationen $allgemeineInformationen = null,
        readonly ?DateTime $statusVeraenderungsZeitpunkt = null,
        /** @var Auftragsstatus[] */
        readonly array $auftragsStatusListe = [],
    ) {
    }
}

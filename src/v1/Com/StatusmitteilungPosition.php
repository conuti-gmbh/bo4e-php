<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;
use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Statusanlass;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Statusobjekt;

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
        /** @var ?Auftragsstatus[] */
        readonly ?array $auftragsStatusListe = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?Statusobjekt $statusObjekt = null,
        readonly ?string $antwortstatusCodeliste = null,
        readonly ?string $vorgangsreferenznummer = null,
        readonly ?string $mitteilungsnummer = null,
        readonly ?string $anfragereferenznummer = null,
        readonly ?DateTime $fertigstellungsdatum = null,
        readonly ?string $lieferdatum = null,
        readonly ?int $sendungsposition = null,
        readonly ?DateTime $gueltigAb = null,
        readonly ?string $referenzMalo = null,
        readonly ?string $referenzPreisschluesselstamm = null,
        readonly ?string $referenzArtikelID = null,
        readonly ?DateTime $startdatum = null,
        readonly ?string $angebotsnummer = null,
        readonly ?string $anfrageReferenz = null,
        readonly ?DateTime $vertragsende = null,
        /** @var ?AnsichtSender[] */
        readonly ?array $ansichtSender = null,
        readonly ?string $gueltigkeitsZeitspanne = null,
        readonly ?ZeitintervallMenge $privilegierteEnergiemenge = null,
    ) {
    }
}

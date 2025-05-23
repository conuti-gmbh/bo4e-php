<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Aggregationsverantwortung;
use Conuti\BO4E\v1\Enum\Prognosegrundlage;
use DateTime;
use Conuti\BO4E\v1\Enum\Fallgruppenzuordnung;
use Conuti\BO4E\v1\Com\Menge;
use Conuti\BO4E\v1\Enum\WahlrechtPrognosegrundlage;
use Conuti\BO4E\v1\Enum\Abwicklungsmodell;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\Zeitraum;
use Conuti\BO4E\v1\Com\Lastprofil;
use Conuti\BO4E\v1\Enum\Profiltyp;

class Bilanzierung
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::BILANZIERUNG,
        readonly string $versionStruktur = '1',
        readonly ?string $marktlokationsId = null,
        readonly ?Aggregationsverantwortung $aggregationsverantwortung = null,
        readonly ?string $zeitreihentyp = null,
        readonly ?Prognosegrundlage $prognosegrundlage = null,
        readonly ?DateTime $bilanzierungsbeginn = null,
        readonly ?DateTime $bilanzierungsende = null,
        readonly ?string $bilanzkreis = null,
        readonly ?Fallgruppenzuordnung $fallgruppenzuordnung = null,
        readonly ?Menge $temperaturarbeit = null,
        readonly ?Menge $jahresverbrauchsprognose = null,
        readonly ?Menge $kundenwert = null,
        readonly ?Menge $verbrauchsaufteilung = null,
        readonly ?WahlrechtPrognosegrundlage $wahlrechtPrognosegrundlage = null,
        readonly ?WahlrechtPrognosegrundlage $grundWahlrechtPrognosegrundlage = null,
        readonly ?Abwicklungsmodell $abwicklungsmodell = null,
        readonly ?Menge $vorjahresverbrauch = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?Zeitraum $gueltigkeitszeitraum = null,
        /** @var ?Lastprofil[] */
        readonly ?array $lastprofile = null,
        /** @var ?Lastprofil[] */
        readonly ?array $lastprofileBilanzierungsbeteiligter = null,
        /** @var ?Profiltyp[] */
        readonly ?array $detailsPrognosegrundlage = null,
    ) {
    }
}

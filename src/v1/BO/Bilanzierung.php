<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Lastprofil;
use Conuti\BO4E\v1\COM\Menge;
use Conuti\BO4E\v1\Enum\Abwicklungsmodell;
use Conuti\BO4E\v1\Enum\Aggregationsverantwortung;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Fallgruppenzuordnung;
use Conuti\BO4E\v1\Enum\Profiltyp;
use Conuti\BO4E\v1\Enum\Prognosegrundlage;
use Conuti\BO4E\v1\Enum\WahlrechtPrognosegrundlage;

class Bilanzierung
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::BILANZIERUNG,
        readonly string $versionStruktur = "1",
        readonly ?string $marktlokationsId = null,
        readonly ?Aggregationsverantwortung $aggregationsverantwortung = null,
        readonly ?string $zeitreihentyp = null,
        readonly ?Prognosegrundlage $prognosegrundlage = null,
        readonly ?string $bilanzierungsbeginn = null,
        readonly ?string $bilanzierungsende = null,
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
        /** @var Lastprofil[] */
        readonly array $lastprofile = [],
        /** @var Lastprofil[] */
        readonly array $lastprofileBilanzierungsbeteiligter = [],
        /** @var Profiltyp[] */
        readonly array $detailsPrognosegrundlage = [],
    ) {
    }
}

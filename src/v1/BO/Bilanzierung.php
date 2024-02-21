<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Lastprofil;
use Conuti\BO4E\v1\COM\Menge;
use Conuti\BO4E\v1\Enum\Abwicklungsmodell;
use Conuti\BO4E\v1\Enum\Aggregationsverantwortung;
use Conuti\BO4E\v1\Enum\Fallgruppenzuordnung;
use Conuti\BO4E\v1\Enum\Profiltyp;
use Conuti\BO4E\v1\Enum\Prognosegrundlage;
use Conuti\BO4E\v1\Enum\WahlrechtPrognosegrundlage;

class Bilanzierung
{
    public function __construct(
        readonly string $boTyp,
        readonly ?string $marktlokationsId,
        readonly ?Aggregationsverantwortung $aggregationsverantwortung,
        readonly ?string $zeitreihentyp,
        readonly ?Prognosegrundlage $prognosegrundlage,
        readonly ?string $bilanzierungsbeginn,
        readonly ?string $bilanzierungsende,
        readonly ?string $bilanzkreis,
        readonly ?Fallgruppenzuordnung $fallgruppenzuordnung,
        readonly ?Menge $temperaturarbeit,
        readonly ?Menge $jahresverbrauchsprognose,
        readonly ?Menge $kundenwert,
        readonly ?Menge $verbrauchsaufteilung,
        readonly ?WahlrechtPrognosegrundlage $wahlrechtPrognosegrundlage,
        readonly ?WahlrechtPrognosegrundlage $grundWahlrechtPrognosegrundlage,
        readonly ?Abwicklungsmodell $abwicklungsmodell,
        readonly ?Menge $vorjahresverbrauch,
        /** @var Lastprofil[] */
        readonly array $lastprofile = [],
        /** @var Lastprofil[] */
        readonly array $lastprofileBilanzierungsbeteiligter = [],
        /** @var Profiltyp[] */
        readonly array $detailsPrognosegrundlage = [],
    ) {
    }
}

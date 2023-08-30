<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Lastprofil;
use Conuti\BO4E\v1\COM\Menge;
use Conuti\BO4E\v1\Enum\Aggregationsverantwortung;
use Conuti\BO4E\v1\Enum\Fallgruppenzuordnung;
use Conuti\BO4E\v1\Enum\Profilart;
use Conuti\BO4E\v1\Enum\Profiltyp;
use Conuti\BO4E\v1\Enum\Prognosegrundlage;
use Conuti\BO4E\v1\Enum\WahlrechtPrognosegrundlage;

class Bilanzierung
{
    public function __construct(
        public string $boTyp,
        public ?string $marktlokationsId,
        public ?Aggregationsverantwortung $aggregationsverantwortung,
        public ?string $zeitreihentyp,
        public ?Prognosegrundlage $prognosegrundlage,
        public ?string $bilanzierungsbeginn,
        public ?string $bilanzierungsende,
        public ?string $bilanzkreis,
        public ?Fallgruppenzuordnung $fallgruppenzuordnung,
        public ?Menge $temperaturarbeit,
        public ?Menge $jahresverbrauchsprognose,
        public ?Menge $kundenwert,
        public ?Menge $verbrauchsaufteilung,
        public ?WahlrechtPrognosegrundlage $wahlrechtPrognosegrundlage,
        public ?WahlrechtPrognosegrundlage $grundWahlrechtPrognosegrundlage,
        /** @var Lastprofil[] */
        public array $lastprofile = [],
        /** @var Profiltyp[] */
        public array $detailsPrognosegrundlage = [],
    ) {
    }

    /**
     * @param Profilart $profilart
     *
     * @return Lastprofil[]
     */
    public function getLastprofile(Profilart $profilart, ?string $herausgeber = null, ?bool $einspeisung = null): array
    {
        return array_filter(
            $this->lastprofile,
            static function (Lastprofil $lastprofil) use ($profilart, $herausgeber, $einspeisung) {
                return $lastprofil->profilart === $profilart
                    && (!$herausgeber || $lastprofil->herausgeber === $herausgeber)
                    && ($einspeisung === null || $lastprofil->einspeisung === $einspeisung);
            }
        );
    }
}

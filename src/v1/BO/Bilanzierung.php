<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Lastprofil;
use Conuti\BO4E\v1\COM\Menge;

class Bilanzierung
{
    public function __construct(
        public string $boTyp,
        public ?string $marktlokationsId,
        public ?string $aggregationsverantwortung,
        public ?string $zeitreihentyp,
        public ?string $prognosegrundlage,
        public ?string $bilanzierungsbeginn,
        public ?string $bilanzierungsende,
        public ?string $bilanzkreis,
        public ?string $fallgruppenzuordnung,
        public ?Menge $temperaturarbeit,
        public ?Menge $jahresverbrauchsprognose,
        public ?Menge $kundenwert,
        public ?Menge $verbrauchsaufteilung,
        public ?string $wahlrechtPrognosegrundlage,
        public ?string $grundWahlrechtPrognosegrundlage,
        /** @var Lastprofil[] */
        public array $lastprofile = [],
        /** @var string[] */
        public array $detailsPrognosegrundlage = [],
    ) {
    }

    /**
     * @param string $profilart
     *
     * @return Lastprofil[]
     */
    public function getLastprofile(string $profilart, ?string $herausgeber = null, ?bool $einspeisung = null): array
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

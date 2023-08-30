<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Interface\Profilart;

class Lastprofil
{
    public function __construct(
        public ?string $bezeichnung,
        public ?string $verfahren,
        public ?string $profilart,
        public ?string $profilschar,
        public ?bool $einspeisung,
        public ?string $herausgeber,
        public ?Tagesparameter $tagesparameter
    ) {
    }

    public function isSLP(): bool
    {
        return $this->profilart === Profilart::ART_STANDARDLASTPROFIL;
    }

    public function isTLP(): bool
    {
        return $this->profilart === Profilart::ART_TAGESPARAMETERABHAENGIGES_LASTPROFIL;
    }
}

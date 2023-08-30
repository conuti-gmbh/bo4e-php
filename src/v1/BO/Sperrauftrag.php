<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;

class Sperrauftrag
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?Adresse $treffpunkt,
        public ?string $sperrauftragsart,
        public ?string $sperrauftragsstatus,
        public ?string $sperrauftragsablehngrund,
        public ?string $sperrauftragsverhinderungsgrund,
        public ?string $zaehlernummer,
        public ?bool $istVomGerichtsvollzieherAngeordnet
    ) {
    }
}

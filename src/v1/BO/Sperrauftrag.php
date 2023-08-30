<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Sperrauftragsablehngrund;
use Conuti\BO4E\v1\Enum\Sperrauftragsart;
use Conuti\BO4E\v1\Enum\Sperrauftragsverhinderungsgrund;

class Sperrauftrag
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?Adresse $treffpunkt,
        public ?Sperrauftragsart $sperrauftragsart,
        public ?Auftragsstatus $sperrauftragsstatus,
        public ?Sperrauftragsablehngrund $sperrauftragsablehngrund,
        public ?Sperrauftragsverhinderungsgrund $sperrauftragsverhinderungsgrund,
        public ?string $zaehlernummer,
        public ?bool $istVomGerichtsvollzieherAngeordnet
    ) {
    }
}

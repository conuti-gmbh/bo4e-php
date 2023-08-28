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
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?Adresse $treffpunkt,
        readonly ?Sperrauftragsart $sperrauftragsart,
        readonly ?Auftragsstatus $sperrauftragsstatus,
        readonly ?Sperrauftragsablehngrund $sperrauftragsablehngrund,
        readonly ?Sperrauftragsverhinderungsgrund $sperrauftragsverhinderungsgrund,
        readonly ?string $zaehlernummer,
        readonly ?bool $istVomGerichtsvollzieherAngeordnet
    ) {
    }
}

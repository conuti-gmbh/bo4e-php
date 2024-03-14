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
        readonly ?Adresse $treffpunkt = null,
        readonly ?Sperrauftragsart $sperrauftragsart = null,
        readonly ?Auftragsstatus $sperrauftragsstatus = null,
        readonly ?Sperrauftragsablehngrund $sperrauftragsablehngrund = null,
        readonly ?Sperrauftragsverhinderungsgrund $sperrauftragsverhinderungsgrund = null,
        readonly ?string $zaehlernummer = null,
        readonly ?bool $istVomGerichtsvollzieherAngeordnet = null
    ) {
    }
}

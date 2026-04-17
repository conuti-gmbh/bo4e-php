<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Enum\Sperrauftragsart;
use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\Sperrauftragsablehngrund;
use Conuti\BO4E\v1\Enum\Sperrauftragsverhinderungsgrund;

class Sperrauftrag
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::SPERRAUFTRAG,
        readonly string $versionStruktur = '1',
        readonly ?Adresse $treffpunkt = null,
        readonly ?Sperrauftragsart $sperrauftragsart = null,
        readonly ?Auftragsstatus $sperrauftragsstatus = null,
        readonly ?Sperrauftragsablehngrund $sperrauftragsablehngrund = null,
        readonly ?Sperrauftragsverhinderungsgrund $sperrauftragsverhinderungsgrund = null,
        readonly ?string $zaehlernummer = null,
        readonly ?bool $istVomGerichtsvollzieherAngeordnet = null,
    ) {
    }
}

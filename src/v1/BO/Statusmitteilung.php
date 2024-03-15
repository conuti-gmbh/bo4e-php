<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\StatusmitteilungPosition;
use Conuti\BO4E\v1\Enum\Auftragsstatus;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Status;
use Conuti\BO4E\v1\Enum\Statusobjekt;

class Statusmitteilung
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::STATUSMITTEILUNG,
        readonly string $versionStruktur = "1",
        readonly ?Statusobjekt $statusObjekt = null,
        readonly ?Status $statusanlass = null,
        readonly ?Auftragsstatus $auftragsstatus = null,
        /** @var StatusmitteilungPosition[] $positionsdaten */
        readonly array $positionsdaten = [],
    ) {
    }
}

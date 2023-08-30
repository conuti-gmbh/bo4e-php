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
        public BOTyp $boTyp,
        public string $versionStruktur,
        public ?Statusobjekt $statusObjekt,
        public ?Status $statusanlass,
        public ?Auftragsstatus $auftragsstatus,
        /** @var StatusmitteilungPosition[] $positionsdaten */
        public array $positionsdaten = [],
    ) {
    }
}

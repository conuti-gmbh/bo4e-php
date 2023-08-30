<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\StatusmitteilungPosition;

class Statusmitteilung
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $statusObjekt,
        public ?string $statusanlass,
        public ?string $auftragsstatus,
        /** @var StatusmitteilungPosition[] $positionsdaten */
        public array $positionsdaten = [],
    ) {
    }
}

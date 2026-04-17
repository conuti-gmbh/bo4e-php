<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\ArithmetischeOperation;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Rechenschritt
{
    public function __construct(
        readonly ?int $rechenschrittBestandteilId = null,
        readonly ?int $referenzRechenschrittId = null,
        readonly ?ArithmetischeOperation $operation = null,
        readonly ?float $verlustfaktorTrafo = null,
        readonly ?float $verlustfaktorLeitung = null,
        readonly ?float $aufteilungsfaktorEnergiemenge = null,
        readonly ?string $messlokationsId = null,
        readonly ?Energierichtung $energieflussrichtung = null,
    ) {
    }
}

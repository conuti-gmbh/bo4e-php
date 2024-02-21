<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArithmetischeOperation;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Rechenschritt
{
    public function __construct(
        readonly ?int $rechenschrittBestandteilId,
        readonly ?int $referenzRechenschrittId,
        readonly ?ArithmetischeOperation $operation,
        readonly ?float $verlustfaktorTrafo,
        readonly ?float $verlustfaktorLeitung,
        readonly ?float $aufteilungsfaktorEnergiemenge,
        readonly ?string $messlokationsId,
        readonly ?Energierichtung $energieflussrichtung
    ) {
    }
}

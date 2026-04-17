<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\ArithmetischeOperation;
use DateTime;

class Messlokationszuordnung
{
    public function __construct(
        readonly ?string $messlokationsId = null,
        readonly ?ArithmetischeOperation $arithmetik = null,
        readonly ?DateTime $gueltigSeit = null,
        readonly ?DateTime $gueltigBis = null,
    ) {
    }
}

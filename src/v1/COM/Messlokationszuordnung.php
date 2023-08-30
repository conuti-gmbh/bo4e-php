<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArithmetischeOperation;
use DateTime;

/**
 * Mit dieser Komponente werden Messlokationen zu Marktlokationen zugeordnet. Dabei kann eine arithmetische
 * Operation (Addition, Subtraktion) angegeben werden, mit der die Messlokation zum Verbrauch der Marklokation
 * beiträgt.
 */
class Messlokationszuordnung
{
    public function __construct(
        public string $messlokationsId,
        public ?ArithmetischeOperation $arithmetik,
        public ?DateTime $gueltigSeit,
        public ?DateTime $gueltigBis,
    ) {
    }
}

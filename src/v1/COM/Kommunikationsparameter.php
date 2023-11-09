<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Kommunikationsparameter
{
    public function __construct(
        readonly ?Zieladresse $zieladresse,
        readonly ?ZertifikatsAussteller $zertifikatsAussteller,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer
    ) {
    }
}

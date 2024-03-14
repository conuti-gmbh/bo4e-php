<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Kommunikationsparameter
{
    public function __construct(
        readonly ?Zieladresse $zieladresse = null,
        readonly ?ZertifikatsAussteller $zertifikatsAussteller = null,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer = null,
    ) {
    }
}

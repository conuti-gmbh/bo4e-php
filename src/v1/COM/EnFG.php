<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\GrundlageVerringerungUmlagen;
use Conuti\BO4E\v1\Enum\GrundlageVerringerungUmlagenGrund;

class EnFG
{
    public function __construct(
        readonly ?GrundlageVerringerungUmlagen $grundlageVerringerungUmlagen,
        /** @var GrundlageVerringerungUmlagenGrund[] */
        readonly array $grund = []
    ) {
    }
}

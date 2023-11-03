<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;

class Netzlokation
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly ?string $versionStruktur,
        readonly ?string $netzlokationsId,
        readonly ?Sparte $sparte,
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = []
    ) {
    }
}

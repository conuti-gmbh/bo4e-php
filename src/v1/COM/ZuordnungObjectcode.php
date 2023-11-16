<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Lokationstyp;

class ZuordnungObjectcode
{
    public function __construct(
        readonly ?Lokationstyp $referenzLokationsTyp,
        readonly ?string $referenzLokationsId,
        readonly ?Lokationstyp $vorgelagerteLokationTyp,
        readonly ?string $vorgelagerteLokationId,
        /** @var Objectcode[] */
        readonly array $objectcode = [],
        /** @var string[] */
        readonly array $referenzMarktlokationTechnischeRessource = []
    ) {
    }
}
